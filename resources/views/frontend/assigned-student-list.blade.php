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
                <div style="text-align: center; text-decoration: underline; font-size: large; font-weight: bold">View Students</div>
                <div style="text-align: left;font-size: large; font-weight: bold"> Batch Name: {{ $batches->title }} </div>
                <div style="text-align: left;font-size: large; font-weight: bold"> Teacher Name: {{ $batches->teacher->name }} </div>
                <table>
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Student Name</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($views) > 0)
                          @foreach ($views as $key => $view)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $view->name }}</td>
                                <td>{{ $view->phone_number }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="5" class="text-center">No Student found</td></tr>
                    @endif
                    </tbody>
                </table>
                <a href="{{ route('teacher-dashboard') }}" style="float: right"><i class="fas fa-arrow-left"></i></a>

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
                <li><i class="fas fa-angle-double-right"></i> View Students</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## View Students Information Starts Here ####### -->

<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="table-responsive">
            <h6>Batch Name: {{ $batches->title }} </h6>
            <h6>Teacher Name: {{ $batches->teacher->name }}</h6>

            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SL No</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($views) > 0)
                          @foreach ($views as $key => $view)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $view->name }}</td>
                                <td>{{ $view->phone_number }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="5" class="text-center">No Student found</td></tr>
                    @endif
                    </tbody>
            </table>
            <a href="{{ route('teacher-dashboard') }}" style="float: right"><i class="fas fa-arrow-left"></i></a>

        </div>
    </div>
</div>
@endsection
