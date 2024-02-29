@extends('frontend.master')
@section('content')
<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Dream to Memorize Quran Academy</h2>
            <p class="mb-3">Learning Quran at Home</p>
            <ul>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Our Courses</li>
            </ul>
        </div>
    </div>
</div>

<!-- ################# Popular Courses Starts Here#######################--->
{{-- <div class="popular-cources">
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
                                <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
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
                                <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
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
                                <li><a href="{{ route('all.courses') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
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
</div> --}}

<div class="our-instructor">
    <div class="container">
        <div class="session-title row">
            <h2>Our Courses</h2>
        </div>

        <div class="instruct-row row pillars_islam">
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/quran reading copy.jpg" alt="">
                    <h6><a href="{{ route('quran-reading-course') }}">Quran Reading Course (Male Kids)</a></h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('quran-reading-course') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('quran-reading-course') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/quran reading copy.jpg" alt="">
                    <h6><a href="{{ route('quran-reading-course-a') }}">Quran Reading Course (Male Adult)</a></h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('quran-reading-course-a') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('quran-reading-course-a') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/quran reading copy.jpg" alt="">
                    <h6><a href="{{ route('quran-reading-course-f') }}">Quran Reading Course (Female kids)</a></h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('quran-reading-course-f') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('quran-reading-course-f') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/quran reading copy.jpg" alt="">
                    <h6><a href="{{ route('quran-reading-course-f-a') }}">Quran Reading Course (Female Adult)</a></h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('quran-reading-course-f-a') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('quran-reading-course-f-a') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/quranic arabic copy.jpg" alt="">
                    <h6><a href="{{ route('quranic-arabic-course') }}">Quran Arabic Course(Male Kids)</a></h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('quranic-arabic-course') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('quranic-arabic-course') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/quranic arabic copy.jpg" alt="">
                    <h6><a href="{{ route('quranic-arabic-course-a') }}">Quran Arabic Course(Male Adult)</a></h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('quranic-arabic-course-a') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('quranic-arabic-course-a') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/quranic arabic copy.jpg" alt="">
                    <h6><a href="{{ route('quranic-arabic-course-f') }}">Quran Arabic Course(Female Kids)</a></h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('quranic-arabic-course-f') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('quranic-arabic-course-f') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/quranic arabic copy.jpg" alt="">
                    <h6><a href="{{ route('quranic-arabic-course-f-a') }}">Quran Arabic Course(Female Adult)</a></h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('quranic-arabic-course-f-a') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('quranic-arabic-course-f-a') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/memorization copy.jpg" alt="">
                    <h6><a href="{{ route('quran-memorization-course') }}">Quran Memorization Course(Male Kids)</a></h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('quran-memorization-course') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('quran-memorization-course') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/memorization copy.jpg" alt="">
                    <h6><a href="{{ route('quran-memorization-course-a') }}">Quran Memorization Course(Male Adult)</a></h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('quran-memorization-course-a') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('quran-memorization-course-a') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/memorization copy.jpg" alt="">
                    <h6><a href="{{ route('quran-memorization-course-f') }}">Quran Memorization Course(Female Kids)</a></h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('quran-memorization-course-f') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('quran-memorization-course-f') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="instruct-card">
                    <img src="{{asset('assets-new-frontend')}}/assets/images/cources/memorization copy.jpg" alt="">
                    <h6><a href="{{ route('quran-memorization-course-f-a') }}">Quran Memorization Course(Female Adult)</a></h6>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><a href="{{ route('quran-memorization-course-f-a') }}"><i class="fa-solid fa-book"></i> Course Details</a></li>
                            <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-file-contract"></i> Course Curriculum</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('quran-memorization-course-f-a') }}"><i class="fa-solid fa-money-bill-wave"></i> Tuition Fees</a></li>
                            <li><a href="{{ route('student-signup') }}"><i class="fa-solid fa-user-graduate"></i> Enroll Now</a></li>
                        </ul>
                    </div>
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
@endsection
