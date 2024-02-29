{{-- @extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
    <div class="container main-area-bg">
        <div class="row">
            <div class="col-md-9">
                <article>
                    <div class="entry">

                        <h1 class="heading mt-3" style="text-decoration: underline;">Contact Us</h1>
                        <br>
                        <div>
                            {!! $setting->contact !!}
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
                    <li><i class="fas fa-angle-double-right"></i> Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ######## Contact Information Starts Here ####### -->

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">
                <div style="padding:20px" class="col-sm-6">
                    <h2>Contact Form</h2>
                    <form action="{{ route('new-contact') }}" method="post">
                        @csrf
                        <div class="row mt-3">
                            <div style="padding-top:10px;" class="col-sm-3"><label>Enter Name :</label></div>
                            <div class="col-sm-8">

                                <input type="text" placeholder="Enter Name" name="name"
                                    class="form-control input-sm" required>
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3">
                                <label>Email Address :</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" name="email" placeholder="Enter Email Address"
                                    class="form-control input-sm" required>
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3">
                                <label>Mobile Number:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" name="phone" placeholder="Enter Mobile Number"
                                    class="form-control input-sm" required>
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3">
                                <label>Enter Message:</label>
                            </div>
                            <div class="col-sm-8">
                                <textarea rows="5" placeholder="Enter Your Message"
                                    class="form-control input-sm" name="message" required>
                                </textarea>
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3">
                                <label></label>
                            </div>
                            <div class="col-sm-8">
                                <button class="btn btn-success btn-sm">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div style="padding:20px" class="col-sm-6">
                    <div class="serv">
                        <h2>Contact Info</h2>
                        <p class="form_text1"><span>Director</span><strong>:</strong> Sheikh Dr. Muhammad Bozlur Rahman
                        </p>
                        <p class="form_text1"><span>Contact</span><strong>:</strong> 01915054987</p>
                        <p class="form_text1"><span>Administrative <br> Coordinator</span><strong>:</strong> Md. Aminur
                            Rahman</p>
                        <p class="form_text1"><span>Contact</span><strong>:</strong> 01823192890</p>
                        <p class="form_text1"><span>Academic <br> Coordinator</span><strong>:</strong> Md. Roky Hossain
                        </p>
                        <p class="form_text1"><span>Contact</span><strong>:</strong> 01303-691589</p>
                        <ul class="d-flex mt-3">
                            <li><a href="mailto:dtmquranacademy@gmail.com"><i class="fa-solid fa-envelope h5"></i></a></li>
                            <li><a href="https://dtmqa.org/"><i class="fa-solid fa-globe h5"></i></a></li>
                            <li><a href="https://www.facebook.com/dtmqa"><i class="fa-brands fa-facebook h5"></i></a></li>
                            <li><a href="https://www.instagram.com/dtmquranacademy/"><i class="fab fa-instagram h5"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/dream-to-memorize-quran-academy-0058a7296/"><i class="fab fa-linkedin-in h5"></i></a></li>
                            <li><a href="https://twitter.com/DTMQuranAcademy"><i class="fab fa-twitter h5"></i></a></li>
                            <li><a href="https://www.youtube.com/@DTMQA"><i class="fab fa-youtube h5"></i></a></li>
                            <li><a href="https://wa.me/01915054987"><i class="fab fa-whatsapp h5"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">
                <div style="padding:20px" class="col-md-12">
                    <h2>Important Links</h2>
                    <div class="my-5 important-link">
                        <ul>
                            <li><a href="https://www.hadithbd.com/"><i class="fa-solid fa-globe"></i>
                                    www.hadithbd.com</a></li>
                            <li><a href="https://www.alim.org/"><i class="fa-solid fa-globe"></i> www.alim.org</a></li>
                            <li><a href="https://tawheedpublicationsbd.com/"><i class="fa-solid fa-globe"></i>
                                    tawheedpublicationsbd</a></li>
                            <li><a href="https://aljamiatussalafiah.org/"><i class="fa-solid fa-globe"></i>
                                    aljamiatussalafiah.org</a></li>
                        </ul>
                        <ul>
                            <li><a href="https://binbaz.org.sa/"><i class="fa-solid fa-globe"></i> binbaz.org.sa</a>
                            </li>
                            <li><a href="https://www.alfawzan.af.org.sa/ar"><i class="fa-solid fa-globe"></i>
                                    alfawzan.af.org.sa</a></li>
                            <li><a href="https://thealbaani.site/"><i class="fa-solid fa-globe"></i> thealbaani.site</a>
                            </li>
                            <li><a href="http://www.uthaymeen.com/"><i class="fa-solid fa-globe"></i> uthaymeen.com</a>
                            </li>
                        </ul>
                        <ul>
                            <li><a href="https://islamqa.info/en"><i class="fa-solid fa-globe"></i> islamqa.info</a>
                            </li>
                            <li><a href="https://kalamullah.com/"><i class="fa-solid fa-globe"></i> kalamullah.com</a>
                            </li>
                            <li><a href="https://assunnahtrust.org/"><i class="fa-solid fa-globe"></i>
                                    assunnahtrust.org</a></li>
                            <li><a href="https://assunnahfoundation.org/"><i class="fa-solid fa-globe"></i>
                                    assunnahfoundation.org</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:0px;" class="row no-margin">

        <iframe style="width:100%"
            src="{{ $setting->google_map_link }}"
            height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


    </div>

    @endsection
