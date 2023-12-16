@extends('frontend.master')
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
<style>
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 35%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    div#social-links{
        margin: 0 auto;
        max-width: 500px;
    }
    div#social-links ul li{
        display: inline-block;
    }
    div#social-links ul li a{
        padding: 20px;
        /* border:1px solid #ccc; */
        margin: 1px;
        font-size:30px;
        color:black;
        background-color: #ccc;
    }
    </style>

<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
    <div class="container main-area-bg">
        <div class="row">
            <div class="col-md-9 ">
                <div style="text-align: center; text-decoration: underline; font-size: large; font-weight: bold">View Live Classes</div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div style="text-align: right; font-size: large; font-weight: bold"><button id="myBtn" style="border: 1px solid black">Create Live Class</button></div>

                                    </div>
                                </div>
                <br>

                {{-- <div style="text-align: left;font-size: large; font-weight: bold"> Batch Name: {{ $batches->title }} </div>
                <div style="text-align: left;font-size: large; font-weight: bold"> Teacher Name: {{ $batches->teacher->name }} </div> --}}
                <table>
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Batch Name</th>
                            <th>Teacher Name</th>
                            <th>Date & Time</th>
                            <th>Link</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($links) > 0)
                          @foreach ($links as $key => $link)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $link->batch->title}}</td>
                                <td>{{ $link->teacher->name }}</td>
                                <td>{{ $link->date }} {{ $link->time }}</td>
                                <td>
                                    @if ($link->status == 1)
                                    <a style="color: green" href="{{ $link->link }}">{{ Str::substr($link->link, 0, 25) }}..</a>
                                    @else
                                    <a style="color: red" href="{{ $link->link }}">{{ Str::substr($link->link, 0, 25) }}..</a>
                                    @endif
                                </td>
                                <td>
                                    @if ($link->status==1 )
                                    <a class="btn btn-success btn-xs" href="{{ route('hide',$link->id) }}">Show</a>
                                    @else
                                    <a class="btn btn-danger btn-xs" href="{{ route('show',$link->id) }}">Hide</a>

                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="5" class="text-center">No Live Classes found</td></tr>
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
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <br>
      <form action="{{ route('live-class-link-create') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Batch</label>
            <select class="form-select" aria-label="Default select example" name="batch_id" required>
              <option selected>Select Batch</option>
              @foreach ($views as $view)
              <option value="{{ $view->id }}">{{ $view->title }}</option>
              @endforeach

            </select>
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Link</label>
          <input type="text" class="form-control" required name="link" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Link">
          <small id="emailHelp" class="form-text text-muted">Live Class Link Enter Here</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Date</label>
          <input type="date" required class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Date">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Time</label>
          <input type="time" required class="form-control" name="time" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Time">
        </div>
        <input type="hidden" name="teacher_id" value="{{  Session::get('TeacherId') }}">
        <input type="hidden" name="status" value="1">
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

  </div>
@endsection
@push('js')
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
@endpush
