<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerPackage;
use App\Models\SellerPackage;
use App\Models\CombinedOrder;
use App\Models\BusinessSetting;
use App\Models\Seller;
use Session;
use URL;
use App\Models\TempOrder;

class BkashController extends Controller
{
    private $base_url;
    public function __construct()
    {
        if(env('BKASH_SANDBOX_MODE')==1){
            $this->base_url = "https://tokenized.sandbox.bka.sh/v1.2.0-beta/tokenized/";
        }
        else {
            $this->base_url = "https://tokenized.pay.bka.sh/v1.2.0-beta/tokenized/";
        }
    }

    public function pay($data){
        //dd($data);
        $amount = $data['fee'];
        if(Session::has('payment_amount')){
            $amount = round(Session::get('payment_amount'));
        }
        
        //Session::put('payment_amount', $amount);
        //Session::put('student_id', $data['student_id']);
        //return view('frontend.checkout.bkash.index');
        return $this->checkout($data);
    }
    
    public function auth(){
        $request_data = array('app_key'=> env('BKASH_CHECKOUT_APP_KEY'), 'app_secret'=>env('BKASH_CHECKOUT_APP_SECRET'));
        $request_data_json=json_encode($request_data);

        $header = array(
                'Content-Type:application/json',
                'username:'.env('BKASH_CHECKOUT_USER_NAME'),
                'password:'.env('BKASH_CHECKOUT_PASSWORD')
                );
        
        $url = curl_init($this->base_url.'checkout/token/grant');
        curl_setopt($url,CURLOPT_HTTPHEADER, $header);
        curl_setopt($url,CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($url,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($url,CURLOPT_POSTFIELDS, $request_data_json);
        curl_setopt($url,CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($url, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);

        $resultdata = curl_exec($url);
        curl_close($url);

        $token = json_decode($resultdata)->id_token;
        return $token;
    }

    public function checkout($data){
        Session::forget('bkash_token');
        Session::put('bkash_token', $this->auth());
        $auth = Session::get('bkash_token');
        //dd($auth);
        
        Session::put('student_id', $data['student_id']);
        Session::put('fee', $data['fee']);
        
        $website_url = URL::to("/");
        
        //dd($website_url);
        
        $invoice_no = 'dtmqa-'.rand(100000, 999999);
        Session::put('invoice_no', $invoice_no);
        
        $requestbody = array(
            'mode' => '0011',
            'payerReference' => ' ',
            'callbackURL' => $website_url.'/bkash/callback',
            'amount' => $data['fee'],
            'currency' => 'BDT',
            'intent' => 'sale',
            'merchantInvoiceNumber' => $invoice_no
        );
        $requestbodyJson = json_encode($requestbody);
        $header = array(
            'Content-Type:application/json',
            'Authorization:' . $auth,
            'X-APP-Key:'.env('BKASH_CHECKOUT_APP_KEY')
        );

        $url = curl_init($this->base_url.'checkout/create');
        curl_setopt($url, CURLOPT_HTTPHEADER, $header);
        curl_setopt($url, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($url, CURLOPT_POSTFIELDS, $requestbodyJson);
        curl_setopt($url, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($url, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $resultdata = curl_exec($url);
        curl_close($url);
        
        //dd($resultdata);
        //Session::put('create_data', $resultdata);
        
        //dd(json_decode($resultdata));
        
        return redirect((json_decode($resultdata)->bkashURL));

        //return $resultdata;
    }
    
    public function callback(Request $request)
    {
        $allRequest = $request->all();
        //dd($request);
        // Check if the payment status is failure
        if(isset($allRequest['status']) && $allRequest['status'] == 'failure') {
            return redirect()->route('payment.error');
    
        }elseif (isset($allRequest['status']) && $allRequest['status'] == 'cancel') {
            // Check if the payment status is cancel
            Session::put('message', 'Canceled by user');
            return redirect()->route('payment.error');
    
        }else {
            // Execute the payment and handle the result
            $resultdata = $this->execute($allRequest['paymentID']);
            //dd($resultdata);
            Session::forget('payment_details');
            Session::put('payment_details', $resultdata);
            
            //dd(session()->all());
    
            $result_data_array = json_decode($resultdata, true);
    
            if(array_key_exists("statusCode", $result_data_array) && $result_data_array['statusCode'] != '0000') {
                //dd('not okk');
                // Handle error status code
                // $notification = [
                //     'message'    => $result_data_array['statusMessage'],
                //     'alert-type' => 'error',
                // ];
                Session::forget('message');
                Session::put('message', $result_data_array['statusMessage']);
                return redirect()->route('payment.error');

            }elseif (array_key_exists("message", $result_data_array)) {
                dd('nooot okk');
                // Handle other cases, such as additional processing if there's a message
                sleep(1);
                $resultdata = $this->query($allRequest['paymentID']);
                Session::forget('payment_details');
                Session::put('payment_details', $resultdata);
            }
            
            
            if(array_key_exists("statusCode", $result_data_array) && $result_data_array['statusCode'] == '0000') {
                //dd('all okk');
                // $checkout_request = new Request;
                // $checkout_request = new Request(Session::get('checkout_request'));
                // $checkout_request->payment_info = Session::get('payment_details');
                // $checkout = new CheckoutController;
                
                // $notification = array(
                //     'message' => 'Payment Successfull!', 
                //     'alert-type' => 'Congratulations'
                // );
                return redirect()->route('payment.success');
            }
            
            return redirect('/bkash/success');
        }
    }


    public function execute($paymentID){
        //$paymentID = $request->paymentID;
        $auth = Session::get('bkash_token');

        $requestbody = array(
            'paymentID' => $paymentID
        );
        $requestbodyJson = json_encode($requestbody);
        //dd($requestbodyJson);

        $header = array(
            'Content-Type:application/json',
            'Authorization:' . $auth,
            'X-APP-Key:'.env('BKASH_CHECKOUT_APP_KEY')
        );

        $url = curl_init($this->base_url.'checkout/execute');
        //dd($url);
        curl_setopt($url, CURLOPT_HTTPHEADER, $header);
        curl_setopt($url, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($url, CURLOPT_POSTFIELDS, $requestbodyJson);
        curl_setopt($url, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($url, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $resultdata = curl_exec($url);
        //dd($resultdata);
        //Session::put('execute_data', $resultdata);
        curl_close($url);

        return $resultdata;
    }
    
    
    public function refund($paymentID){
        $auth = Session::get('bkash_token');

        $requestbody = array(
            'paymentID' => $paymentID
        );
        
        $requestbodyJson = json_encode($requestbody);

        $header = array(
            'Content-Type:application/json',
            'Authorization:' . $auth,
            'X-APP-Key:'.env('BKASH_CHECKOUT_APP_KEY')
        );

        $url = curl_init($this->base_url.'checkout/execute');
        //dd($url);
        curl_setopt($url, CURLOPT_HTTPHEADER, $header);
        curl_setopt($url, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($url, CURLOPT_POSTFIELDS, $requestbodyJson);
        curl_setopt($url, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($url, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $resultdata = curl_exec($url);
        curl_close($url);

        return $resultdata;
    }

    public function success(Request $request){
        $checkout_type = Session::get('payment_type');

        if($checkout_type == 'cart_payment'){
            $checkout_request = new Request;
            $checkout_request = new Request(Session::get('checkout_request'));
            $checkout_request->payment_info = Session::get('payment_details');
            $checkout = new CheckoutController;
            
            $notification = array(
                'message' => 'Payment Successfull!', 
                'alert-type' => 'Congratulations'
            );
            return $checkout->store($checkout_request)->with($notification);

        }elseif($checkout_type == 'buy_checkout'){

            $checkout_request = new Request;
            $checkout_request = new Request(Session::get('buy_checkout_request'));
            $checkout_request->payment_info = $request->payment_details;
            $checkout_request->transaction_id = json_decode($request->payment_details)->trxID;
            $checkout_request->account_number = json_decode($request->payment_details)->customerMsisdn;
            $orderController = new OrderController;

            notify()->success("Payment Successfull", "Congratulations");
            return $orderController->orderBuyNowStore($checkout_request);

        }elseif($checkout_type == 'partial'){
            PartialPayment::create([
                'order_id'=>Session::get('order_id'),
                'payment_method'=>Session::get('payment_method_name'),
                'transaction_id'=>json_decode($request->payment_details)->trxID,
                'amount'=>Session::get('payment_amount'),
            ]);
            return redirect()->route('order.pay.form', Session::get('order_order_id'))->with('paymentSuccess', 'bKash Online payment successful');
        }elseif($checkout_type == 'wallet'){
            auth()->user()->wallate = auth()->user()->wallate + Session::get('payment_amount');
            notify()->success("Wallet Recharge Successfull", "Congratulations!");
            return redirect()->route('wallet')->with('paymentSuccess', 'bKash Online payment successful');
        }
    }

    public function error(Request $request){
         $notification = array(
            'message' => 'Payment failed!.', 
            'alert-type' => 'error'
        );
        return redirect()->route('checkout')->with($notification);
    }
}