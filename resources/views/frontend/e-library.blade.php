@extends('frontend.master')
@section('content')
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Dream to Memorize Quran Academy</h2>
            <p class="mb-3">Learning Quran at Home</p>
            <ul>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> E-library</li>
            </ul>
        </div>
    </div>
</div>
<div class="our-instructor">
    <div class="container">
        <div class="session-title row">
            <h2>E-library</h2>
        </div>
        <div class="instruct-row row">
            @foreach ($librarys as $library )
            <div class="col-lg-3 col-md-6">
                <a href="{{ asset('assets/files/uploads/elibrary') }}/{{ $library->library_file }}" target="_blank">
                <div class="instruct-card" >
                    <img src="{{ asset('assets') }}/images/uploads/elibrary/{{ $library->image }}" alt="E-library">
                    <h6>{{ $library->title }}</h6>
                </div>
            </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
