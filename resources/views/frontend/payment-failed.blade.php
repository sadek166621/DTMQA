@extends('frontend.master')
@section('content')
<style>
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 150px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 35%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    div#social-links{
        margin: 0 auto;
        max-width: 500px;
    }
    div#social-links ul li{
        display: inline-block;
    }
    div#social-links ul li a{
        padding: 20px;
        /* border:1px solid #ccc; */
        margin: 1px;
        font-size:30px;
        color:black;
        background-color: #ccc;
    }
    </style>
    
    <!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Dream to Memorize Quran Academy</h2>
            <p class="mb-3">Learning Quran at Home</p>
            
        </div>
    </div>
</div>

<!-- ######## Quran Reading Course Kids Information Starts Here ####### -->


<div class="row contact-rooo no-margin">
	<div class="container">
		<div class="row">
            <div class="col-md-9 text-center">
                
                <div class="text-center">
                    <h1 class="text-danger">Payment Failed!</h1>
                    <h3>Invoice No: <span class="text-success">{{ $invoice_no }}</span></h3>
                    <h3>Payment Amount: <span class="text-success">{{ $fee }}</span></h3>
                    @if($message) <h3>Fail Reason: <span class="text-danger">{{ $message }}</span></h3> @endif
                </div>
                <br>
                
                <a class="btn btn-success" href="{{ route('student-admission') }}">Try Again</a>
                
            </div>
        
	    </div>
	</div>
	
</div>	

@endsection
