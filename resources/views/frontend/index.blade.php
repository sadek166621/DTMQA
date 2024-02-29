{{-- @extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
	<section class="front-part">
		<div class="container main-area-bg">
			<div class="row">
				<div class="col-md-9">
					<div class="content-left">
											<article id="post-3390">

													<div class="entry">
														</div>
						</article>

						<div class="front-notices-area">
							<div class="notices-front">
		<div class="notices-front-board">
			<div class="notices-items">
				<h2>Notice Board</h2>
				<ul class="notices_front_list">
					@foreach ($notices as $key => $notice)
					<li class="notice-item text-left">
						<div class="notice-title">
							<h5><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ route('notice.show', $notice->id) }}">{{ $notice->title }}</a></h5>
						</div>
					</li>
					@endforeach

												</ul>
				<h4 class="text-right"><a href="notices">View All</a></h4>
			</div>
		</div>
	</div>					</div><!-- End Notices section -->
						{{-- <div class="front-news-area">
							<div class="new-scroll" style="padding: 10px 0px 0px;background: #E6E7E8;margin: 10px 0px;vertical-align: middle;display: inline-block;">
		<div class="row">
			<div class="col-md-2">
				<h2 class="text-center">News:</h2>
			</div>
			<div class="col-md-8">

				<ul class="news-ticker" style="height: 56px;">
					@foreach ($news as $key => $data)
					<li>
						<h5 class="text-left">
							<i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ route('news.show', $data->id) }}">{{ $data->title }}</a>
						</h5>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="col-md-2">
				<h4 class="text-center"><a href="news">All</a></h4>
			</div>
		</div>
	</div>					</div><!-- End News section -->
						<div class="front-boxs-area">
							<div class="boxs-front">
		<div class="boxs-front-board">
			<div class="row">


				<div class="text-left col-md-12">
					<div class="box-item">
						<div class="box-title">
							<h3>Download Recorded Class</h3>
						</div>
						<div class="box-img">
												<img width="110" height="100" src="	https://ngdc.ac.bd/wp-content/uploads/2021/06/download-1.jpg" class="thumbs wp-post-image" alt="" loading="lazy" />										</div>
						<div class="box-text" style="width: 69%!important">
							<ul>
						<li><a href="#">Audio</a></li>
						<li><a href="#">Video</a></li>
						</ul>
						</div>
					</div>
				</div>

				<div class="text-left col-md-12">
					<div class="box-item">
						<div class="box-title">
							<h3>Weekly Dars</h3>
						</div>
						<div class="box-img">
												<a href="{{ route('weekly.dars') }}">
                                                    <img width="135" height="129" src="{{ asset('assets') }}/images/uploads/sliders/wkydrks.jpg" class="thumbs wp-post-image" alt="" loading="lazy" />
                                                </a>
                                            </div>
						<div class="box-text">

						</div>
					</div>
				</div>
				<div class="text-left col-md-12">
					<div class="box-item">
						<div class="box-title">
							<h3>Important News </h3>
						</div>
						<div class="box-img">
												<img width="135" height="129" src="https://ngdc.ac.bd/wp-content/uploads/2021/03/office-order.png" class="thumbs wp-post-image" alt="" loading="lazy" />										</div>
						<div class="box-text">

						</div>
					</div>
				</div>


				{{-- <div class="text-left col-md-12">
					<div class="box-item">
						<div class="box-title">
							<h3>Weekly Dars</h3>
						</div>
						<div class="box-img">
						<img width="512" height="512" src="" class="thumbs wp-post-image" alt="" loading="lazy" srcset="https://ngdc.ac.bd/wp-content/uploads/2021/03/office-order.png 512w, https://ngdc.ac.bd/wp-content/uploads/2021/03/office-order-300x300.png 300w, https://ngdc.ac.bd/wp-content/uploads/2021/03/office-order-150x150.png 150w" sizes="(max-width: 512px) 100vw, 512px" />										</div>
						<div class="box-text">

						</div>
					</div>
				</div>


									</div>
		</div>
	</div>					</div><!-- End Boxs section -->


						<!-- End News section -->
					</div><!-- content-left -->
				</div> <!-- End Column 8 -->
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






{{-- ========================New Design Home Page================================ --}}




@extends('frontend.master')
@section('content')
<!-- ################# Slider Starts Here#######################--->
<div class="slider">
    <!-- Set up your HTML -->
    <div class="owl-carousel ">
        <div class="slider-img">
            <div class="item">
                <div class="slider-img"><img src="{{asset('assets-new-frontend')}}/assets/images/slider/Slider-1.jpeg" style='height:600px;width:1640px;' alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h2 class="slider-title">Dream to Memorize Quran Academy (DTMQA)</h2>
                                <p class="slider-text">Learning Quran At Home</p>
                                <a href="{{ route('all.courses') }}" class="btn btn-success">View All Cources</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($sliders as $key => $slider)
        <div class="item">
            <img src="{{ asset('assets') }}/images/uploads/sliders/{{ $slider->image }}" style='height:600px;width:1640px;' alt="image">
        </div>
        @endforeach
        {{-- <div class="item">
            <img src="{{asset('assets-new-frontend')}}/assets/images/slider/slider-3.jpg" alt="">
        </div> --}}
    </div>
</div>


<!-- ################# Key Features Starts Here#######################--->
<div class="key-features">
    <div class="container">
        <div class="row key-row no-margin">
            <div class="box c1">
                <div class="box-content">
                    <i class="fa-solid fa-users-between-lines c1-icon"></i>
                    <a class="c1-text" href="{{ route('online-class') }}">Online Class</a>
                </div>
            </div>
            <div class="box c2">
                <div class="box-content">
                    <i class="fa-solid fa-radio"></i>
                    <a href="{{ route('weekly.dars') }}">Weekly Dars</a>
                </div>
            </div>
            <div class="box c1">
                <div class="box-content">
                    <i class="fas fa-globe-americas"></i>
                    <a href="notices">Notice</a>
                </div>
            </div>
            <div class="box c2">
                <div class="box-content">
                    <i class="fa-solid fa-microphone-lines"></i>
                    <a href="https://www.youtube.com/@DTMQA">Audio</a>
                </div>
            </div>
            <div class="box c1">
                <div class="box-content">
                    <i class="fa-brands fa-youtube"></i>
                    <a href="https://www.youtube.com/@DTMQA">Video</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ################# About Us Starts Here#######################--->
<div class="about-us">
    <div class="container">
        <div class="session-title row">
            <h2>About Us</h2>
        </div>
        <div class="row g-5">
            <div class="col-lg-6" style="min-height: 300px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute about_us_img" src="{{ asset('assets-new-frontend') }}/assets/images/logo/DTMQA.png"
                        alt="">
                </div>
            </div>
            <div class="col-lg-6 p-5">
                <h2 class="mb-4">Dream to Memorize Quran Academy (DTMQA)</h2>
                <p class="mb-4 h4">إِنَّ الْحَمْدَ لِلَّهِ نَحْمَدُهُ وَنَسْتَعِيْنُهُ مَنْ يَّهْدِهِ اللَّهُ فَلَا
                    مُضِلَّ لَهُ وَمَنْ يُّضْلِلْ فَلَا هَادِىَ لَهُ
                    وَأَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللَّهُ وَحْدَهُ لَا شَرِيْكَ لَهُ وَأَنَّ مُحَمَّدًا عَبْدُهُ
                    وَرَسُوْلُهُ أَمَّا بَعْدُ.
                </p>
                <p class="mb-4">আলহামদুলিল্লাহ, যাবতীয় প্রশংসা আল্লাহ সুবহানাহু ওয়া তা‘আলার জন্য, যিনি চূড়ান্ত
                    সংবিধান ‘আল-কুরআন’-কে বিশ্ব মানবতার মুক্তির জন্য অবতীর্ণ করেছেন। যেখানে রয়েছে মানব..... <a
                        style="color: #43cb89;" href="{{ route('principalMessage') }}">বিস্তারিত পড়ুন</a>
                </p>
                <a class="btn text-white fw-bold py-3 px-5 mt-2" style="background-color: #43cb89;"
                    href="{{ route('student-signup') }}">Register Now</a>
            </div>
        </div>
    </div>
</div>

<!-- ################# Our Courses (Quran Campus)#######################--->
<div class="popular-cources">
    <div class="container">
        <div class="session-title row">
            <h2>Our Courses (Quran Campus)</h2>
        </div>
        <div class="row courc-ro">
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/quran reading copy.jpg" alt="">
                    <div class="cource-det">
                        <h6>Quran Reading Course</h6>
                        <div class="d-flex justify-content-between">
                            <ul>
                                <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                                <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                                <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/quranic arabic copy.jpg" alt="">
                    <div class="cource-det">
                        <h6>Quranic Arabic Course Adult</h6>
                        <div class="d-flex justify-content-between">
                            <ul>
                                <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                                <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                                <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/memorization copy.jpg" alt="">
                    <div class="cource-det">
                        <h6>Quran Memorization Course Adult</h6>
                        <div class="d-flex justify-content-between">
                            <ul>
                                <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                                <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                                <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ################# University Number Starts Here#######################--->


<div class="doctor-message">
    <div class="inner-lay">
        <div class="container">
            <div class="row session-title">
                <h2>Dream to Memorize Quran Academy (DTMQA)</h2>
                <p>Our Online Quran Reading Course will help students of all ages and levels reach their goal of
                    reciting the Quran proficiently with Tajweed in a very short time. At the end of this course,
                    students will be able to read and recite Quran beautifully.</p>
                <p class="mt-3">Whatever your age or level is, it’s never too late to learn how to read Quran with
                    Tajweed from
                    the comfort of your home with the help of Expert Quran and Tajweed Tutors who have great
                    experience in teaching the Quran and Tajweed online to guide you in this blessed journey
                    of reciting Quran.</p>
            </div>
            <div class="row">
                <div class="col-sm-3 numb">
                    <h3>{{ $totalcourses }}+</h3>
                    <span>Total Courses</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>{{ $totalStudents }}+</h3>
                    <span>Total Students</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>{{ $totalmaleteachers }}+</h3>
                    <span>Qualified Male Teachers</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>{{ $totalfemaleteachers }}+</h3>
                    <span>Qualified Female Teachers</span>
                </div>
            </div>
        </div>

    </div>

</div>




<!-- ################# Basics of Islam Campus Starts Here#######################--->

<div class="our-instructor d-none">
    <div class="container">
        <div class="session-title row">
            <h2>Basics of Islam Campus</h2>
        </div>
        <div class="instruct-row row pillars_islam">
            <div class="col-lg-4 col-md-6">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/Islam/tq-pillar-img1.jpg" alt="">
                    <h6>Shahadah (Faith)</h6>
                    <p>To Believe in no God but Allah and that Muhammad is his prophet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/Islam/tq-pillar-img2.jpg" alt="">
                    <h6>Salah (Prayer)</h6>
                    <p>To Believe in no God but Allah and that Muhammad is his prophet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/Islam/tq-pillar-img3.jpg" alt="">
                    <h6>Sawm (Fasting)</h6>
                    <p>To Believe in no God but Allah and that Muhammad is his prophet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/Islam/tq-pillar-img4.jpg" alt="">
                    <h6>Zakat (Almsgiving)</h6>
                    <p>To Believe in no God but Allah and that Muhammad is his prophet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/Islam/tq-pillar-img5.jpg" alt="">
                    <h6>Hajj (Pilgrimage)</h6>
                    <p>To Believe in no God but Allah and that Muhammad is his prophet.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ################# Basics of Islam Campus Starts Here#######################--->

<div class="our-instructor">
    <div class="container">
        <div class="session-title row">
            <h2>Basics of Islam Campus</h2>
        </div>
        <div class="instruct-row row pillars_islam">
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/program/aqeedah and manhaz.jpg" alt="icon">
                    <h6><a href="#">Program-1</a></h6>
                    <p>Aqeedah and Manhaz</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/program/fiqhul ibadat.jpg" alt="icon">
                    <h6><a href="#">Program-2</a></h6>
                    <p>Fiqhul Ibadat</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/program/fiqhul mu'amalat.jpg" alt="icon">
                    <h6><a href="#">Program-3</a></h6>
                    <p>Fiqhul Mu'amalat</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/program/ulumul quran.jpg" alt="icon">
                    <h6><a href="#">Program-4</a></h6>
                    <p>Ulumul Quran</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/program/ulumul hadith.jpg" alt="icon">
                    <h6><a href="#">Program-5</a></h6>
                    <p>Ulumul Hadith</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/program/tahfizul quran.jpg" alt="icon">
                    <h6><a href="#">Program-6</a></h6>
                    <p>Tahfizul Quran</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/program/islamic ethiquette and ethics.jpg" alt="icon">
                    <h6><a href="#">Program-7</a></h6>
                    <p>Islamic Etiquette and Ethics</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/program/islamic dawah.jpg" alt="icon">
                    <h6><a href="#">Program-8</a></h6>
                    <p>Islamic Dawah</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/program/seerah and tarikhul islam.jpg" alt="icon">
                    <h6><a href="#">Program-9</a></h6>
                    <p>Seerah and Tarikhul Islami</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/program/islam and modern doctrines.jpg" alt="icon">
                    <h6><a href="#">Program-10</a></h6>
                    <p>Islam and Modern Doctrines</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ################# Feature Starts Here#######################--->

<div class="feature-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="feature-one__single">
                    <div class="feature-one__single-bg"
                        style="background-image: url({{asset('assets-new-frontend')}}/assets/images/logo/feature-one-shape-1.png);">
                    </div>
                    <div class="feature-one__top">
                        <div class="feature-one__top-inner">
                            <div class="feature-one__top-icon">
                                <span><i class="fa-solid fa-hand-holding-dollar"></i></span>
                            </div>
                            <div class="feature-one__top-title-box">
                                <h3 class="feature-one__top-title"><a href="#">Donate for DTMQA</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="text text-light my-5">
                        <p>It is obligatory on every Muslim to invite others to Islam and share knowledge of Islam.
                            Sadaqatul Jariyah is ongoing charity received by us (for good
                            actions and deeds), that will not only benefit us in this life, but will continue to
                            benefit us after our death Inshallah.</p>
                    </div>
                    <a href="{{ route('Donate-Us') }}" class="btn btn-light py-md-3 px-md-5">View Details</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="feature-one__single feature-one__single--two">
                    <div class="feature-one__single-bg"
                        style="background-image: url({{asset('assets-new-frontend')}}/assets/images/logo/feature-one-shape-1.png);">
                    </div>
                    <div class="feature-one__top">
                        <div class="feature-one__top-inner">
                            <div class="feature-one__top-icon">
                                <span><i class="fa-solid fa-person-circle-plus"></i></span>
                            </div>
                            <div class="feature-one__top-title-box">
                                <h3 class="feature-one__top-title"><a href="{{ route('student-signup') }}">Register as a<br>
                                        Student</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="text text-light my-5">
                        <p>The Prophet (ﷺ) said, "Such a person as recites the Qur'an and masters it by
                            heart, will be with the noble righteous scribes (in Heaven). And such a person
                            exerts himself to learn the Qur'an by heart, and recites it with great
                            difficulty, will have a double reward."</p>
                    </div>
                    <a href="{{ route('student-signup') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ################# Why Choose Us Starts Here#######################--->

<div class="our-instructor">
    <div class="container">
        <div class="session-title row">
            <h2>Why Choose Us</h2>
        </div>
        <div class="instruct-row row">
            <div class="col-lg-3 col-md-6">
                <div class="instruct-card instruct-card-height">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/logo/e-1.png" alt="">
                    <h6>Experienced Instructors</h6>
                    <p>At Dream to Memorize Quran Academy, our expert instructors are dedicated to guiding you on
                        your transformative journey, drawing from their wealth of experience, skills, and humble
                        nature.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="instruct-card instruct-card-height">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/logo/e-2 c.png" alt="">
                    <h6>Flexible Learning</h6>
                    <p>No matter where you are, our courses are accessible to you. We provide flexible schedules
                        that allow you to learn at your own pace.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="instruct-card instruct-card-height">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/logo/c-3 c.png" alt="">
                    <h6>In-Depth Curriculum</h6>
                    <p>Our comprehensive curriculum ensures a deep understanding of each subject, providing you with
                        profound insights into Quranic and Islamic knowledge.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="instruct-card instruct-card-height">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/logo/c-4 c.png" alt="">
                    <h6>Interactive Learning</h6>
                    <p>Our expert team has designed classes to be engaging and interactive, fostering a sense of
                        community among students who share similar interests and values. This creates a supportive
                        and vibrant learning environment.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ################# Latest News Starts Here#######################--->


<div class="our-blog">
    <div class="container">
        <div class="session-title row">
            <h2>Latest News</h2>
        </div>

        <div class="row-blog row">

            @foreach ($news as $notice )
            <div class="col-lg-6 col-md-8 mx-md-auto">
                <div class="blog-card row">

                    <div class="col-1">
                    </div>
                    <div class="col-9 setv">
                        <h4>{{ $notice->title }}</h4>
                        <ul>
                            <li>{!! $notice->description !!}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach



            {{-- <div class="col-lg-6 col-md-8 mx-md-auto">
                <div class="blog-card row">

                    <div class="col-3">
                        <div class="date-box">
                            <span>Jun</span>
                            <p>6</p>
                            <small>2019</small>
                        </div>

                    </div>
                    <div class="col-9 setv">
                        <h4>Photo Exibition in the Library</h4>
                        <ul>
                            <li>8:00 - 12:00</li>
                            <li>Forest, Avenue, Aenean egestas</li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
