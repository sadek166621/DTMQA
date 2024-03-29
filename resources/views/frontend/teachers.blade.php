{{-- @extends('frontend.master')
@section('content')
	<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
			<div class="container main-area-bg">
				<div class="row">
					<div class="col-md-9">
						<h1>Teachers Male</h1>
						<form action="{{ route('teacher.list') }}" method="get" class="form-inline mb-2">
<div class="form-group mx-sm-3 mb-2">
    <select name="department" id="department" class="form-control">
        <option value="">--Select Department--</option>
        @foreach ($departments as $department)
        @isset($_GET['department'])
        <option value="{{ $department->id }}" @if($_GET['department']==$department->id) selected
            @endif>{{ $department->name }}</option>
        @else
        <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endisset
        @endforeach
    </select>
</div>
<div class="form-group mx-sm-3 mb-2">
    <button type="submit" class="btn btn-primary mb-2">Search</button>
</div>
</form>
<table>
    <thead>
        <tr>
            <th>SL No</th>
            <th>Name</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
        @if (count($teachers) > 0)
        @foreach ($teachers as $key => $teacher)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->department->name }}</td>
            <td>{{ $teacher->designation }}</td>
            <td><a href="{{ route('teacher.view', $teacher->username) }}">View details</a></td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="5" class="text-center">No teacher found</td>
        </tr>
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
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Dream to Memorize Quran Academy</h2>
            <p class="mb-3">Learning Quran at Home</p>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Teachers (Male)</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Quran Reading Course Kids Information Starts Here ####### -->

<div class="row contact-rooo no-margin">
    <div class="container">
        <div>
            <h2>Teachers (Male)</h2>
            <div class="d-flex align-items-center">
                <form action="{{ route('teacher.list') }}" method="get" class="form-inline mb-2">
                    <select name="department" id="department" class="form-control mt-4">
                        @foreach ($departments as $department)
                        @isset($_GET['department'])
                        <option value="{{ $department->id }}" @if($_GET['department']==$department->id) selected
                            @endif>{{ $department->name }}</option>
                        @else
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endisset
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary px-4 mx-3">Search</button>
                </form>
            </div>
        </div>

        <div class="mt-lg-5">
            <table id="" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($teachers) > 0)
                    @foreach ($teachers as $key => $teacher)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->department->name }}</td>
                        <td>{{ $teacher->designation }}</td>
                        <td><a href="{{ route('teacher.view', $teacher->username) }}" class="text-success">View
                                details</a></td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="5" class="text-center">No teacher found</td>
                    </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
