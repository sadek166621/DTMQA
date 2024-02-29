
@extends('admin.layouts.master')
@section('content')
<style>

    .card {
        border: none;
    }
    .card-header {
        background-color: #3c679b;
        color: white;
    }
</style>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Student</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid" >
    <div class="row">
      <div class="col-12">
        <div class="card" id="invoice_wrapper">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            Student Information

                        </div>
                        <div class="card-body">
                             <form action="{{ route('admin.applied-student.update', $student->id) }}" method="Post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-4">
                                                <strong>Name</strong>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" @isset($student) value="{{ $student->name }}" @endisset required>
                                                  </div>
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-4">
                                                <strong>Date of Birth</strong>
                                            </div>
                                            {{-- <div class="col-8">
                                                <span>
                                                    {{  $studentregs->date }}
                                                </span>/<span>{{  $studentregs->month }}
                                                    </span>/<span>{{  $studentregs->year }}</span>
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-4">
                                                <strong>Country</strong>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <input type="text" name="countryplacejoining" class="form-control" id="exampleInputEmail1" placeholder="Enter Country" @isset($student) value="{{ $student->countryplacejoining }}" @endisset required>
                                                  </div>
                                             </div>
                                        </div>

                                        {{-- <div class="row">
                                            <div class="col-4">
                                                <strong>Gender</strong>
                                            </div>
                                            <div class="col-8">
                                                <input type="text">
                                            </div>
                                        </div> --}}

                                        <div class="row">
                                            <div class="col-4">
                                                <strong>Father's Name</strong>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <input type="text" name="fathername" class="form-control" id="exampleInputEmail1" placeholder="Enter Father Name" @isset($student) value="{{ $student->fathername }}" @endisset required>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <strong>Mother's Name</strong>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <input type="text" name="mothername" class="form-control" id="exampleInputEmail1" placeholder="Enter Mother Name" @isset($student) value="{{ $student->mothername }}" @endisset required>
                                                  </div>
                                            </div>
                                        </div>


                                        {{-- <h4 style="  text-decoration: underline;">Present Address</h4>

                                        <div class="row">

                                            <div class="col-4">
                                                <strong>Post Code</strong>
                                            </div>
                                            <div class="col-8">
                                                <input type="text">                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <strong>Thana</strong>
                                            </div>
                                            <div class="col-8">
                                                <input type="text">                                        </div>
                                        </div> --}}
                                        {{-- <div class="row">
                                            <div class="col-4">
                                                <strong>Division</strong>
                                            </div>
                                            {{-- <div class="col-8">
                                                @if ($studentregs->division_id==1)
                                                                Dhaka
                                                                @elseif ($studentregs->division_id==2)
                                                                chattogram
                                                                @elseif ($studentregs->division_id==3)
                                                                rajshahi
                                                                @elseif ($studentregs->division_id==4)
                                                                khulna
                                                                @elseif ($studentregs->division_id==5)
                                                                barishal
                                                                @elseif ($studentregs->division_id==6)
                                                                sylhet
                                                                @elseif ($studentregs->division_id==7)
                                                                rangpur
                                                                @elseif ($studentregs->division_id==8)
                                                                mymensingh

                                                                @endif
                                            </div>
                                        </div> --}}
                                        {{-- <div class="row">

                                            <div class="col-4">
                                                <strong>District</strong>
                                            </div>
                                            {{-- <div class="col-8">
                                                @if ($studentregs->district_id == 1)
                                                                 cumilla
                                                                 @elseif($studentregs->district_id == 2)
                                                                 feni
                                                                 @elseif($studentregs->district_id == 3)
                                                                 brahmanbaria
                                                                 @elseif($studentregs->district_id == 4)
                                                                 rangamati
                                                                 @elseif($studentregs->district_id == 5)
                                                                 noakhali
                                                                 @elseif($studentregs->district_id == 6)
                                                                 chandpur
                                                                 @elseif($studentregs->district_id == 7)
                                                                 lakshmipur
                                                                 @elseif($studentregs->district_id == 8)
                                                                 chattogram
                                                                 @elseif($studentregs->district_id == 9)
                                                                 coxsbazar
                                                                 @elseif($studentregs->district_id == 10)
                                                                 khagrachari
                                                                 @elseif($studentregs->district_id == 11)
                                                                 bandarban
                                                                 @elseif($studentregs->district_id == 12)
                                                                 sirajganj
                                                                 @elseif($studentregs->district_id == 13)
                                                                 pabna
                                                                 @elseif($studentregs->district_id == 14)
                                                                 bogura
                                                                 @elseif($studentregs->district_id == 15)
                                                                 rajshahi
                                                                 @elseif($studentregs->district_id == 16)
                                                                 natore
                                                                 @elseif($studentregs->district_id == 17)
                                                                 jaipurhat
                                                                 @elseif($studentregs->district_id == 18)
                                                                 nawabganj
                                                                 @elseif($studentregs->district_id == 19)
                                                                 naogaon
                                                                 @elseif($studentregs->district_id == 20)
                                                                 jashore
                                                                 @elseif($studentregs->district_id == 21)
                                                                 satkhira
                                                                 @elseif($studentregs->district_id == 22)
                                                                 meherpur
                                                                 @elseif($studentregs->district_id == 23)
                                                                 narail
                                                                 @elseif($studentregs->district_id == 24)
                                                                 chuadanga
                                                                 @elseif($studentregs->district_id == 25)
                                                                 kushtia
                                                                 @elseif($studentregs->district_id == 26)
                                                                 magura
                                                                 @elseif($studentregs->district_id == 27)
                                                                 khulna
                                                                 @elseif($studentregs->district_id == 28)
                                                                 bagerhat
                                                                 @elseif($studentregs->district_id == 29)
                                                                 jhenaidah
                                                                 @elseif($studentregs->district_id == 30)
                                                                 barishal
                                                                 @elseif($studentregs->district_id == 31)
                                                                 jhalokati
                                                                 @elseif($studentregs->district_id == 32)
                                                                 patuakhali
                                                                 @elseif($studentregs->district_id == 33)
                                                                 pirojpur
                                                                 @elseif($studentregs->district_id == 34)
                                                                 bhola
                                                                 @elseif($studentregs->district_id == 35)
                                                                 barguna
                                                                 @elseif($studentregs->district_id == 36)
                                                                 sylhet
                                                                 @elseif($studentregs->district_id == 37)
                                                                 moulvibazar
                                                                 @elseif($studentregs->district_id == 38)
                                                                 habiganj
                                                                 @elseif($studentregs->district_id == 39)
                                                                 sunamganj
                                                                 @elseif($studentregs->district_id == 40)
                                                                 rangpur
                                                                 @elseif($studentregs->district_id == 41)
                                                                 panchagarh
                                                                 @elseif($studentregs->district_id == 42)
                                                                 dinajpur
                                                                 @elseif($studentregs->district_id == 43)
                                                                 lalmonirhat
                                                                 @elseif($studentregs->district_id == 44)
                                                                 nilphamari
                                                                 @elseif($studentregs->district_id == 45)
                                                                 thakurgaon
                                                                 @elseif($studentregs->district_id == 46)
                                                                 gaibandha
                                                                 @elseif($studentregs->district_id == 47)
                                                                 kurigram
                                                                 @elseif($studentregs->district_id == 48)
                                                                 mymensingh
                                                                 @elseif($studentregs->district_id == 49)
                                                                 jamalpur
                                                                 @elseif($studentregs->district_id == 50)
                                                                 netrokona
                                                                 @elseif($studentregs->district_id == 51)
                                                                 sherpur
                                                                 @elseif($studentregs->district_id == 52)
                                                                 dhaka
                                                                 @elseif($studentregs->district_id == 53)
                                                                 narsingdi
                                                                 @elseif($studentregs->district_id == 54)
                                                                 gazipur
                                                                 @elseif($studentregs->district_id == 55)
                                                                 shariatpur
                                                                 @elseif($studentregs->district_id == 56)
                                                                 narayanganj
                                                                 @elseif($studentregs->district_id == 57)
                                                                 tangail
                                                                 @elseif($studentregs->district_id == 58)
                                                                 kishoreganj
                                                                 @elseif($studentregs->district_id == 59)
                                                                 manikganj
                                                                 @elseif($studentregs->district_id == 60)
                                                                 munshiganj
                                                                 @elseif($studentregs->district_id == 61)
                                                                 rajbari
                                                                 @elseif($studentregs->district_id == 62)
                                                                 madaripur
                                                                 @elseif($studentregs->district_id == 63)
                                                                 faridpur
                                                                 @elseif($studentregs->district_id == 64)
                                                                 gopalganj
                                                                 @endif
                                            </div>
                                        </div> --}}


                                    </div>


                                     <div class="col-md-6">
                                        {{-- <div class="row">
                                            <div class="col-4">
                                                <strong>Like TO Study</strong>
                                            </div>
                                            <div class="col-8">
                                                <p>                        {{ $studentregs->course->name }}
                                                </p>
                                            </div>
                                        </div> --}}


                                        {{-- <div class="row">
                                            <div class="col-4">
                                                <strong>Number Of Classes</strong>
                                            </div>
                                            <div class="col-8">
                                                <p>{{  $studentregs->cls_per_wk }}</p>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="row">
                                            <div class="col-4">
                                                <strong>Weeks</strong>
                                            </div> --}}
                                            {{-- <div class="col-8">
                                                @php
                                                $weeks = json_decode( $studentregs->weeks)
                                                    @endphp
                                                    @foreach ( $weeks as $week)
                                                        {{ $week }},
                                                    @endforeach
                                            </div> --}}
                                        {{-- </div> --}}
                                        {{-- <div class="row">
                                            <div class="col-4">
                                                <strong>Suitable Time</strong>
                                            </div>
                                            <div class="col-8">
                                                <p>{{  $studentregs->suitable_time }}</p>
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            {{-- <div class="col-4">
                                                <strong>Income</strong>
                                            </div> --}}
                                            {{-- <div class="col-8">
                                                @if ($studentregs->income == '500')
                                                <p> Bellow 10,000Tk </p>
                                                @elseif ($studentregs->income == '1000')
                                                <p> 11000Tk-30000Tk </p>
                                                @elseif ($studentregs->income == '1500')
                                                <p> 31000Tk-50000Tk </p>
                                                @elseif ($studentregs->income == '2000')
                                                <p> 51000Tk-100000Tk </p>
                                                @elseif ($studentregs->income == '3000')
                                                <p> 101000Tk-150000Tk </p>
                                                @elseif ($studentregs->income == '4000')
                                                <p> 151000Tk-200000Tk </p>
                                                @endif

                                            </div> --}}
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <strong>Tuition Fee</strong>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <input type="text" name="tuition_fee" class="form-control" id="exampleInputEmail1" placeholder="Enter Tuition Fee" @isset($student) value="{{ $student->tuition_fee }}" @endisset required>
                                                  </div>                                       </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <strong>Whatsapp Number</strong>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <input type="text" name="whatsapp_number" class="form-control" id="exampleInputEmail1" placeholder="Enter Whatsapp Number" @isset($student) value="{{ $student->whatsapp_number }}" @endisset required>
                                                  </div>                                      </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <strong>Phone</strong>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <input type="text" name="phone_number" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone" @isset($student) value="{{ $student->phone_number }}" @endisset required>
                                                  </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <strong>Payment Number</strong>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <input type="text" name="payment_number" class="form-control" id="exampleInputEmail1" placeholder="Enter Payment Number" @isset($student) value="{{ $student->payment_number }}" @endisset required>
                                                  </div>                                        </div>
                                        </div>

                                        <div class="">
                                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                                          </div>
                                        {{-- <h4 style="  text-decoration: underline;">Permanent Address</h4>

                                        <div class="row">

                                            <div class="col-4">
                                                <strong>Post Code</strong>
                                            </div>
                                            <div class="col-8">
                                                <input type="text">                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <strong>Thana</strong>
                                            </div>
                                            <div class="col-8">
                                                <input type="text">                                        </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-4">
                                                <strong>Division</strong>
                                            </div> --}}
                                            {{-- <div class="col-8">
                                                 <p>{{  $studentregs->division_id }}</p>
                                                @if ($studentregs->division_id==1)
                                                                Dhaka
                                                                @elseif ($studentregs->division_id==2)
                                                                chattogram
                                                                @elseif ($studentregs->division_id==3)
                                                                rajshahi
                                                                @elseif ($studentregs->division_id==4)
                                                                khulna
                                                                @elseif ($studentregs->division_id==5)
                                                                barishal
                                                                @elseif ($studentregs->division_id==6)
                                                                sylhet
                                                                @elseif ($studentregs->division_id==7)
                                                                rangpur
                                                                @elseif ($studentregs->division_id==8)
                                                                mymensingh

                                                                @endif
                                            </div> --}}
                                        </div>
                                        {{-- <div class="row">

                                            <div class="col-4">
                                                <strong>District</strong>
                                            </div>
                                            <div class="col-8">
                                                @if ($studentregs->district_id == 1)
                                                                 cumilla
                                                                 @elseif($studentregs->district_id == 2)
                                                                 feni
                                                                 @elseif($studentregs->district_id == 3)
                                                                 brahmanbaria
                                                                 @elseif($studentregs->district_id == 4)
                                                                 rangamati
                                                                 @elseif($studentregs->district_id == 5)
                                                                 noakhali
                                                                 @elseif($studentregs->district_id == 6)
                                                                 chandpur
                                                                 @elseif($studentregs->district_id == 7)
                                                                 lakshmipur
                                                                 @elseif($studentregs->district_id == 8)
                                                                 chattogram
                                                                 @elseif($studentregs->district_id == 9)
                                                                 coxsbazar
                                                                 @elseif($studentregs->district_id == 10)
                                                                 khagrachari
                                                                 @elseif($studentregs->district_id == 11)
                                                                 bandarban
                                                                 @elseif($studentregs->district_id == 12)
                                                                 sirajganj
                                                                 @elseif($studentregs->district_id == 13)
                                                                 pabna
                                                                 @elseif($studentregs->district_id == 14)
                                                                 bogura
                                                                 @elseif($studentregs->district_id == 15)
                                                                 rajshahi
                                                                 @elseif($studentregs->district_id == 16)
                                                                 natore
                                                                 @elseif($studentregs->district_id == 17)
                                                                 jaipurhat
                                                                 @elseif($studentregs->district_id == 18)
                                                                 nawabganj
                                                                 @elseif($studentregs->district_id == 19)
                                                                 naogaon
                                                                 @elseif($studentregs->district_id == 20)
                                                                 jashore
                                                                 @elseif($studentregs->district_id == 21)
                                                                 satkhira
                                                                 @elseif($studentregs->district_id == 22)
                                                                 meherpur
                                                                 @elseif($studentregs->district_id == 23)
                                                                 narail
                                                                 @elseif($studentregs->district_id == 24)
                                                                 chuadanga
                                                                 @elseif($studentregs->district_id == 25)
                                                                 kushtia
                                                                 @elseif($studentregs->district_id == 26)
                                                                 magura
                                                                 @elseif($studentregs->district_id == 27)
                                                                 khulna
                                                                 @elseif($studentregs->district_id == 28)
                                                                 bagerhat
                                                                 @elseif($studentregs->district_id == 29)
                                                                 jhenaidah
                                                                 @elseif($studentregs->district_id == 30)
                                                                 barishal
                                                                 @elseif($studentregs->district_id == 31)
                                                                 jhalokati
                                                                 @elseif($studentregs->district_id == 32)
                                                                 patuakhali
                                                                 @elseif($studentregs->district_id == 33)
                                                                 pirojpur
                                                                 @elseif($studentregs->district_id == 34)
                                                                 bhola
                                                                 @elseif($studentregs->district_id == 35)
                                                                 barguna
                                                                 @elseif($studentregs->district_id == 36)
                                                                 sylhet
                                                                 @elseif($studentregs->district_id == 37)
                                                                 moulvibazar
                                                                 @elseif($studentregs->district_id == 38)
                                                                 habiganj
                                                                 @elseif($studentregs->district_id == 39)
                                                                 sunamganj
                                                                 @elseif($studentregs->district_id == 40)
                                                                 rangpur
                                                                 @elseif($studentregs->district_id == 41)
                                                                 panchagarh
                                                                 @elseif($studentregs->district_id == 42)
                                                                 dinajpur
                                                                 @elseif($studentregs->district_id == 43)
                                                                 lalmonirhat
                                                                 @elseif($studentregs->district_id == 44)
                                                                 nilphamari
                                                                 @elseif($studentregs->district_id == 45)
                                                                 thakurgaon
                                                                 @elseif($studentregs->district_id == 46)
                                                                 gaibandha
                                                                 @elseif($studentregs->district_id == 47)
                                                                 kurigram
                                                                 @elseif($studentregs->district_id == 48)
                                                                 mymensingh
                                                                 @elseif($studentregs->district_id == 49)
                                                                 jamalpur
                                                                 @elseif($studentregs->district_id == 50)
                                                                 netrokona
                                                                 @elseif($studentregs->district_id == 51)
                                                                 sherpur
                                                                 @elseif($studentregs->district_id == 52)
                                                                 dhaka
                                                                 @elseif($studentregs->district_id == 53)
                                                                 narsingdi
                                                                 @elseif($studentregs->district_id == 54)
                                                                 gazipur
                                                                 @elseif($studentregs->district_id == 55)
                                                                 shariatpur
                                                                 @elseif($studentregs->district_id == 56)
                                                                 narayanganj
                                                                 @elseif($studentregs->district_id == 57)
                                                                 tangail
                                                                 @elseif($studentregs->district_id == 58)
                                                                 kishoreganj
                                                                 @elseif($studentregs->district_id == 59)
                                                                 manikganj
                                                                 @elseif($studentregs->district_id == 60)
                                                                 munshiganj
                                                                 @elseif($studentregs->district_id == 61)
                                                                 rajbari
                                                                 @elseif($studentregs->district_id == 62)
                                                                 madaripur
                                                                 @elseif($studentregs->district_id == 63)
                                                                 faridpur
                                                                 @elseif($studentregs->district_id == 64)
                                                                 gopalganj
                                                                 @endif
                                            </div>
                                        </div> --}}

                                    </div>
                                </div>

                             </form>
                        </div>
                    </div>
                </div>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- modal description -->
<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="scrollmodalLabel">Notice Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="noticeDetailsWrapper">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal description -->
@endsection
@push('js')
<script src="{{asset('assets-frontend/js/vendor/modernizr-3.6.0.min.js ') }}"></script>
<script src="{{asset('assets-frontend/js/vendor/jquery-3.6.0.min.js ') }}"></script>
   <!-- Invoice JS -->
   <script src="{{asset('assets-frontend')}}/js/invoice/jspdf.min.js"></script>
   <script src="{{asset('assets-frontend')}}/js/invoice/invoice.js"></script>

@endpush
