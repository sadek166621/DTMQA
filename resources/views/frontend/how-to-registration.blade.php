{{-- @extends('frontend.master')
@section('content')
<style>
    form {
        display: flex;
        flex-direction: column;
        width: 100%;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        border-radius: 4px;
    }

</style>
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
    <div class="container main-area-bg">
        <div class="row">
            <div class="col-md-9">
                <h1 class="heading mt-3">Student Login </h1>
                <a href="{{ route('student-signup') }}">Sign Up?</a>
<article>
    <div class="entry">

        <br>
        <div>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <form action="{{ route('student-login') }}" method="post">
                @csrf
                <label for="uname"><b>Email or Number</b></label>
                <input type="text" placeholder="Enter Email / Number" name="name" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <div>
                    <a href="{{ route("forget.password") }}"> Forget Password</a>
                </div>

                <button type="submit">Login</button>

            </form>
        </div>
    </div>
</article>
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
                    <a href="http://www.ictd.gov.bd/" target="_blank"><img
                            src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/gov-logo.png" alt="" /></a>
                    <h6>Information & Communication Technology Division</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bottom-logo-one">
                    <a href="http://www.bcc.net.bd/" target="_blank"><img
                            src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/bcc-logo.png" alt="" /></a>
                    <h6>Bangladesh Computer Council</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bottom-logo-one">
                    <a href="http://www.jica.go.jp/english/" target="_blank"><img
                            src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/jica-logo.png" alt="" /></a>
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
</section>
@endsection --}}

@extends('frontend.master')
@section('content')
<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Dream to Memorize Quran Academy</h2>
            <p class="mb-3">Learning Quran at Home</p>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Student Login</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Donate Us Information Starts Here ####### -->

<div class="row contact-rooo no-margin">
    <div class="container d-flex justify-content-center">
        <div style="padding:20px">
            <h2>Student Login</h2>
            <a class="text-danger" href="{{ route('student-signup') }}">Sign Up?</a>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <form class="row g-3 mt-5" action="{{ route('student-login') }}" method="post">
                @csrf
                <div class="col-md-10">
                    <label for="username" class="form-label fw-bold fw-bold">User Name or Student ID</label>
                    <input name="name" type="text" class="form-control" id="username"
                        placeholder="Enter User Name or Student ID" required>
                </div>
                <div class="col-md-10">
                    <label for="inputPassword4" class="form-label fw-bold">Password</label>
                    <input name="password" type="password" class="form-control" id="inputPassword4"
                        placeholder="********" required>
                </div>
                <div class="col-md-10">
                    <a href="{{ route("forget.password") }}"> Forget Password</a>
                </div>

                <div class="col-8 mt-3">
                    <button type="submit" class="btn btn-primary px-5 py-2">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
