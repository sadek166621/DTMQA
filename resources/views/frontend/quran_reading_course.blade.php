{{-- @extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
    <div class="container main-area-bg">
        <div class="row">
            <div class="col-md-9">
                <article>
                    <div class="entry">

                        <h1 class="heading mt-3">Quran Reading Course</h1>
                        <br>
                        <div>
                            {!! $campusmale->Quran_Reading_Course !!}
                        </div>
                    </div>
                </article>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('curriculum') }}" >
                           <button class="btn btn-success">
                            curriculum
                           </button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('how-to-register') }}" >
                            <button class="btn btn-success">
                                Enroll Now
                            </button>
                        </a>
                    </div>
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
                    <li><i class="fas fa-angle-double-right"></i> Quran Reading Course Kids</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ######## Quran Reading Course Kids Information Starts Here ####### -->

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div style="padding:20px">
                <h2>Quran Reading Course Kids</h2>
                <div class="mt-lg-5">
                    {!! $campusmale->Quran_Reading_Course !!}

                </div>
            </div>
            <!-- Join Button  -->
            <div class="text-center">
                <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('curriculum') }}">Curriculum</a>
                <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('student-signup') }}">Enroll Now</a>
            </div>
        </div>
    </div>


@endsection
