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
                <div class="card  mb-3 card-outline card-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 mb-sm-2 mb-2 mb-md-0 mb-lg-0 d-inline-flex flex-column align-items-left">
                                    <img class="img-thumbnail" src="{{ asset('assets') }}/images/uploads/teachers/{{ $teacher->image }}" width="200px" height="200px">
                            </div>
                            <div class="col-md-9 col-sm-12">
                                <a href="{{ route('teacher-logout') }}" style="float: right;">Logout</a>
                                <div class="intro_list">
                                    <h4 class="">{{ $teacher->name }}</h4>
                                    <div class="text-capitalize">
                                        <b>{{ $teacher->designation }}</b>
                                    </div>
                                    <div class="">
                                    </div>

                                    <div class="my-2">
                                        {{-- <p class="mb-0">
                                            <span class="fa fa-calendar mr-2"></span>  {{ $teacher->join_date }} (Joining date)</p>
                                        <p class="mb-0"><span class="fa fa-user-graduate mr-2"></span>{{ $teacher->edu_qualification }}</p>
                                        <p class="mb-0"><span class="fa fa-history mr-2"></span>{{ $teacher->experience }}</p>
                                        <p class="mb-0"><span class="fa fa-calendar mr-2"></span>  {{ $teacher->join_date }} (Joining date)</p>
                                        <p class="mb-0"><span class="fa fa-envelope mr-2"></span>{{ $teacher->email }}</p>
                                        <p class="mb-0"><span class="fa fa-phone-square mr-2"></span> {{ $teacher->phone }}</p>
                                    </div>
                                    <div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <div style="text-align: center;font-size: large; font-weight: bold">Assigned Courses</div>
                <table>
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Course Name</th>
                            {{-- <th>Department</th>
                            <th>Designation</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($courses) > 0)
                          @foreach ($courses as $key => $course)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $course->course->name }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="5" class="text-center">No Courses found</td></tr>
                    @endif
                    </tbody>
                </table>
                <br>
                <div style="text-align: center;font-size: large; font-weight: bold">Batch</div>
                <table>
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Batch Name</th>
                            {{-- <th>Department</th>
                            {{-- <th>Designation</th>
                            <th>View Students</th>
                            <th>View Live Classes</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($batches) > 0)
                          @foreach ($batches as $key => $batch)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $batch->title }}</td>
                                <td><a href="{{ route('assigned.student.list', $batch->id) }}" >View Students</a></td>
                                <td><a href="{{ route('live.classes.list', $batch->id) }}" >View Live Classes</a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="5" class="text-center">No Batch found</td></tr>
                    @endif
                    </tbody>
                </table>

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
                <li><i class="fas fa-angle-double-right"></i> Teacher Profile</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Teacher Information Starts Here ####### -->

<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div
                            class="col-md-3 col-sm-12 mb-sm-2 mb-2 mb-md-0 mb-lg-0 d-inline-flex flex-column align-items-left">
                        <img class="img-thumbnail" src="{{ asset('assets') }}/images/uploads/teachers/{{ $teacher->image }}" width="200px" height="200px">
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <a href="{{ route('teacher-logout') }}" style="float: right; color: red;
                            font-weight: 700;">Logout</a>
                            <div class="intro_list p-4">
                                <h4 class="">{{ $teacher->name }}</h4>
                                <div class="text-capitalize">
                                    <b>{{ $teacher->designation }}</b>
                                </div>
                                <div class="">
                                </div>

                                <div class="my-2">
                                        <span class="fa fa-calendar mr-2"></span>  {{ $teacher->join_date }} (Joining date)</p>
                                    <p class="mb-0"><span class="fa fa-user-graduate mr-2"></span>{{ $teacher->edu_qualification }}</p>
                                    <p class="mb-0"><span class="fa fa-history mr-2"></span>{{ $teacher->experience }}</p>
                                    <p class="mb-0"><span class="fa fa-calendar mr-2"></span>  {{ $teacher->join_date }} (Joining date)</p>
                                    <p class="mb-0"><span class="fa fa-envelope mr-2"></span>{{ $teacher->email }}</p>
                                    <p class="mb-0"><span class="fa fa-phone-square mr-2"></span> {{ $teacher->phone }}</p>
                                </div>
                                <div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h5 class="text-center">Assigned Courses</h5>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Course Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($courses) > 0)
                          @foreach ($courses as $key => $course)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $course->course->name }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="5" class="text-center">No Courses found</td></tr>
                    @endif
                    </tbody>
                  </table>
            </div>

            <div class="table-responsive mt-5">
                <h5 class="text-center">Batch</h5>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Batch Name</th>
                            {{-- <th>Department</th>
                            {{-- {{-- <th>Designation</th> --}}
                            <th>View Students</th>
                            <th>View Live Classes</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($batches) > 0)
                          @foreach ($batches as $key => $batch)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $batch->title }}</td>
                                <td><a style="color: #43cb89;" href="{{ route('assigned.student.list', $batch->id) }}" >View Students</a></td>
                                <td><a style="color: #43cb89;" href="{{ route('live.classes.list', $batch->id) }}" >View Live Classes</a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="5" class="text-center">No Batch found</td></tr>
                    @endif
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
