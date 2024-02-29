@extends('frontend.master')
@section('content')
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Dream to Memorize Quran Academy</h2>
            <p class="mb-3">Learning Quran at Home</p>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Live Class</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Live Class Information Starts Here ####### -->

<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="">
            <form action="{{ route('live-class-link-update', $editlink->id) }}" method="Post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Link</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="link" value="{{ $editlink->link }}" aria-describedby="emailHelp" placeholder="Enter Link">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="date" class="form-control" value="{{ $editlink->date }}" name="date" id="exampleInputPassword1" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputPassword1">Time</label>
                        <input type="time" class="form-control" value="{{ $editlink->time }}" name="time" id="exampleInputPassword1" placeholder="">
                      </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
