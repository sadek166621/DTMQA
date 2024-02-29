<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use DB;
class ForgetPasswordManager extends Controller
{
    function forgetPassword(){
        return view("forget-password");
    }

    function forgetPasswordPost(Request $request){
        $request->validate([
            'email'=> "required|email|exists:studentsignups"
        ]);

        $token = Str::random(64);

        DB::table("password_resets")->insert([
            'email' =>$request->email,
            'token' =>$token,
        ]);

        Mail::send("emails.forget-password", ['token' => $token], function ($message) use ($request){

            $message->to($request->email);
            $message->subject("Reset Password");

        });

        return redirect()->to(route("forget.password"))
        ->with("success", "We have send a email to reset password.");


    }

    function resetPassword($token){
        return view("new-password", compact('token'));
    }

    function resetPasswordPost(Request $request){
        $request->validate([
            "email" => "required|email|exists:studentsignups",
            "password" => "required|string|min:6|confirmed",
            "password_confirmation" => "required"
        ]);

        $updatePassword = DB::table("password_resets")
        ->where([
            "email" => $request->email,
            "token" => $request->token
        ])->first();

        if(!$updatePassword){
            return redirect()->to(route("reset.password"))->with("error", "Invalid");
        }

        DB::table("studentsignups")
        ->where("email", $request->email)->update(["password" => Hash::make($request->password)]);

        DB::table("password_resets")->where(["email" => $request->email])->delete();

        return redirect()->route("how-to-register")->with("success", "Password Reset Successfull");

    }
}
