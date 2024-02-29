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
{{-- <div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
    <div class="container main-area-bg">
        <div class="row">
            <div class="col-md-9">
                <article>
                    <div class="entry">

                        <h1 class="heading mt-3">Be Part Of Us</h1>
                        <br>
                        <div>
                            {!! $more->BePartofUs !!}
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{ route('be-a-teacher') }}"><button type="button" class="btn btn-warning">Be a Teacher</button>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('how-to-register') }}"><button type="button" class="btn btn-warning">Be a Student</button>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('Donate-Us') }}"><button type="button" class="btn btn-warning">Be a Financial Contributor</button>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <button type="button" id="myBtn" class="btn btn-warning">Share this Nobel Effot</button>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <br>
                  {!! $shareComponent !!}
                </div>

              </div>
        <!-- End News section -->
        <!-- content-left -->
    <!-- End Column 8 -->
            @include('frontend.include.side-bar')
</div>
</div>
</section>


</div><!-- #content -->
<div class="container" style="display:none;">
<div class="bottom-logos text-center">
    <div class="row">
        <div class="col-md-4">
            <div class="bottom-logo-one">
                <a href="http://www.ictd.gov.bd/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/gov-logo.png" alt="" /></a>
                <h6>Information & Communication Technology Division</h6>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bottom-logo-one">
                <a href="http://www.bcc.net.bd/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/bcc-logo.png" alt="" /></a>
                <h6>Bangladesh Computer Council</h6>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bottom-logo-one">
                <a href="http://www.jica.go.jp/english/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/jica-logo.png" alt="" /></a>
                <h6>Japan International Cooperation Agency</h6>
            </div>
        </div>
    </div>
</div>
</div>
<section class="bottom-area" style="background:#ddd;margin:60px 0px 0px 0px;padding:40px 0px;display:none;">
<div class="container">
<div class="bottom-part">
    <div class="bottom-part1">
        <div class="bottom-contact-part text-black">
                            </div>
    </div>
    <div class="bottom-part2">
        <div class="bottom-get-started-part">
                            </div>
    </div>
</div>
</div>
</section>  --}}
<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Dream to Memorize Quran Academy</h2>
            <p class="mb-3">Learning Quran at Home</p>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Be Part Of Us</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Quran Reading Course Kids Information Starts Here ####### -->

<div class="row contact-rooo no-margin">
    <div class="container">
        <div style="padding:20px">
            <h2>Be Part Of Us</h2>
            <div class="mt-lg-5">
                1. Be a teacher if you have the required qualification.
                2. Be a student (you or your family members).
                3. Be a financial contributor for the sake of Allah.
                4. Share this noble effort with others and encourage them to be part of it in any way they can.
                5. Make dua to Allah for the program to flourish and continue till the day of resurrection.
            </div>
        </div>
        <!-- Join Button  -->
        <div class="text-center">
            <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('be-a-teacher') }}">Be A Teacher</a>
            <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('student-signup') }}">Be A Student</a>
            {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="#">Share This Nobel Effort</a> --}}
            <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('Donate-Us') }}">Be A Financial Contributor</a>
            <button type="button" id="myBtn" class="btn btn-primary py-3 px-5 mt-2">Share this Nobel Effot</button>
        </div>
    </div>
</div>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <br>
      {!! $shareComponent !!}
    </div>

  </div>

@endsection
@push('js')
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
@endpush
