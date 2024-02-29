{{-- @extends('frontend.master')
@section('content')
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.student-info, .academic-info {
    width: 80%;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #f8f8f8;
}

.student-details {
    font-size: 16px;
}

.detail {
    margin-bottom: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #333;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:nth-child(odd) {
    background-color: #fff;
}

</style>
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
    <div class="container main-area-bg">
        <div class="row">
            <div class="col-md-9">
                <header>
                    <h1>Student Profile</h1>
                </header>
                <br>
                <div class="card overflow-hidden">
                    <div class="row no-gutters row-bordered row-border-light">
                        <div class="col-md-3 pt-0">
                            <div class="list-group list-group-flush account-settings-links">
                                <a class="list-group-item list-group-item-action active" data-toggle="list"
                                    href="#account-general">General</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#account-change-password">Class Information</a>
                                    <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#account-info">Batch</a>
                                    <br>
                                    <a class="list-group-item list-group-item-action"
                                    href="{{ route('logout') }}">Logout</a>
                                    <hr>

                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="account-general">
                                        <section class="student-info">
                                            <h3 style="text-decoration: underline;">Student Information</h2>
                                            <div class="student-details">
                                                <div class="">
                                                    <strong>Name:</strong> {{ $dashboard->name }}
                                                </div>
                                                <div class="details">
                                                    <strong>User-Name</strong> {{ $dashboard->code->user_name }}
                                                </div>
                                                <div class="details">
                                                    <strong>Student ID:</strong> {{ $dashboard->code->code }}
                                                </div>

                                                <div class="details">
                                                    <strong>Date Of Birth:</strong> {{ $dashboard->date }}/{{ $dashboard->month }}/{{ $dashboard->year }}.
                                                </div>
                                                <div class="details">
                                                    <strong>Country:</strong> {{ $dashboard->countryplacejoining }}.
                                                </div>
                                                <div class="details">
                                                    <strong>Father's Name:</strong> {{ $dashboard->fathername }}.
                                                </div>
                                                <div>
                                                    <strong>Mother's Name:</strong> {{ $dashboard->mothername }}.
                                                </div>
                                                <div class="details">
                                                    <strong>Gender:</strong> {{ $dashboard->gender }}.
                                                </div>
                                                <div class="details">
                                                    <strong>Phone:</strong> {{ $dashboard->phone_number }}.
                                                </div>
                                                <div>
                                                    <strong>WhatsApp:</strong> {{ $dashboard->whatsapp_number }}.
                                                </div>
                                                <br>
                                                <h5 style="text-decoration: underline;">Present Adress</h5>
                                                    <div class="details">
                                                        <strong>
                                                            Vill/Town/City/Post Office:</strong> {{ $dashboard->post_code }}.
                                                    </div>
                                                    <div class="details">
                                                        <strong>Thana:</strong> {{ $dashboard->thana }}.
                                                        <strong>Division:</strong>
                                                            @if ($dashboard->division_id==1)
                                                            Dhaka
                                                            @elseif ($dashboard->division_id==2)
                                                            chattogram
                                                            @elseif ($dashboard->division_id==3)
                                                            rajshahi
                                                            @elseif ($dashboard->division_id==4)
                                                            khulna
                                                            @elseif ($dashboard->division_id==5)
                                                            barishal
                                                            @elseif ($dashboard->division_id==6)
                                                            sylhet
                                                            @elseif ($dashboard->division_id==7)
                                                            rangpur
                                                            @elseif ($dashboard->division_id==8)
                                                            mymensingh

                                                            @endif

                                                             . <strong>District:</strong>
                                                             @if ($dashboard->district_id == 1)
                                                             cumilla
                                                             @elseif($dashboard->district_id == 2)
                                                             feni
                                                             @elseif($dashboard->district_id == 3)
                                                             brahmanbaria
                                                             @elseif($dashboard->district_id == 4)
                                                             rangamati
                                                             @elseif($dashboard->district_id == 5)
                                                             noakhali
                                                             @elseif($dashboard->district_id == 6)
                                                             chandpur
                                                             @elseif($dashboard->district_id == 7)
                                                             lakshmipur
                                                             @elseif($dashboard->district_id == 8)
                                                             chattogram
                                                             @elseif($dashboard->district_id == 9)
                                                             coxsbazar
                                                             @elseif($dashboard->district_id == 10)
                                                             khagrachari
                                                             @elseif($dashboard->district_id == 11)
                                                             bandarban
                                                             @elseif($dashboard->district_id == 12)
                                                             sirajganj
                                                             @elseif($dashboard->district_id == 13)
                                                             pabna
                                                             @elseif($dashboard->district_id == 14)
                                                             bogura
                                                             @elseif($dashboard->district_id == 15)
                                                             rajshahi
                                                             @elseif($dashboard->district_id == 16)
                                                             natore
                                                             @elseif($dashboard->district_id == 17)
                                                             jaipurhat
                                                             @elseif($dashboard->district_id == 18)
                                                             nawabganj
                                                             @elseif($dashboard->district_id == 19)
                                                             naogaon
                                                             @elseif($dashboard->district_id == 20)
                                                             jashore
                                                             @elseif($dashboard->district_id == 21)
                                                             satkhira
                                                             @elseif($dashboard->district_id == 22)
                                                             meherpur
                                                             @elseif($dashboard->district_id == 23)
                                                             narail
                                                             @elseif($dashboard->district_id == 24)
                                                             chuadanga
                                                             @elseif($dashboard->district_id == 25)
                                                             kushtia
                                                             @elseif($dashboard->district_id == 26)
                                                             magura
                                                             @elseif($dashboard->district_id == 27)
                                                             khulna
                                                             @elseif($dashboard->district_id == 28)
                                                             bagerhat
                                                             @elseif($dashboard->district_id == 29)
                                                             jhenaidah
                                                             @elseif($dashboard->district_id == 30)
                                                             barishal
                                                             @elseif($dashboard->district_id == 31)
                                                             jhalokati
                                                             @elseif($dashboard->district_id == 32)
                                                             patuakhali
                                                             @elseif($dashboard->district_id == 33)
                                                             pirojpur
                                                             @elseif($dashboard->district_id == 34)
                                                             bhola
                                                             @elseif($dashboard->district_id == 35)
                                                             barguna
                                                             @elseif($dashboard->district_id == 36)
                                                             sylhet
                                                             @elseif($dashboard->district_id == 37)
                                                             moulvibazar
                                                             @elseif($dashboard->district_id == 38)
                                                             habiganj
                                                             @elseif($dashboard->district_id == 39)
                                                             sunamganj
                                                             @elseif($dashboard->district_id == 40)
                                                             rangpur
                                                             @elseif($dashboard->district_id == 41)
                                                             panchagarh
                                                             @elseif($dashboard->district_id == 42)
                                                             dinajpur
                                                             @elseif($dashboard->district_id == 43)
                                                             lalmonirhat
                                                             @elseif($dashboard->district_id == 44)
                                                             nilphamari
                                                             @elseif($dashboard->district_id == 45)
                                                             thakurgaon
                                                             @elseif($dashboard->district_id == 46)
                                                             gaibandha
                                                             @elseif($dashboard->district_id == 47)
                                                             kurigram
                                                             @elseif($dashboard->district_id == 48)
                                                             mymensingh
                                                             @elseif($dashboard->district_id == 49)
                                                             jamalpur
                                                             @elseif($dashboard->district_id == 50)
                                                             netrokona
                                                             @elseif($dashboard->district_id == 51)
                                                             sherpur
                                                             @elseif($dashboard->district_id == 52)
                                                             dhaka
                                                             @elseif($dashboard->district_id == 53)
                                                             narsingdi
                                                             @elseif($dashboard->district_id == 54)
                                                             gazipur
                                                             @elseif($dashboard->district_id == 55)
                                                             shariatpur
                                                             @elseif($dashboard->district_id == 56)
                                                             narayanganj
                                                             @elseif($dashboard->district_id == 57)
                                                             tangail
                                                             @elseif($dashboard->district_id == 58)
                                                             kishoreganj
                                                             @elseif($dashboard->district_id == 59)
                                                             manikganj
                                                             @elseif($dashboard->district_id == 60)
                                                             munshiganj
                                                             @elseif($dashboard->district_id == 61)
                                                             rajbari
                                                             @elseif($dashboard->district_id == 62)
                                                             madaripur
                                                             @elseif($dashboard->district_id == 63)
                                                             faridpur
                                                             @elseif($dashboard->district_id == 64)
                                                             gopalganj
                                                             @endif
                                                    </div>
                                                    <br>
                                                    <h5 style="text-decoration: underline;">Permanent Adress</h2>
                                                        <div class="details">
                                                            <strong>
                                                                Vill/Town/City/Post Office:</strong> {{ $dashboard->p_postcode }}.
                                                        </div>
                                                        <div class="details">
                                                            <strong>Thana:</strong> {{ $dashboard->P_thana }}.
                                                            <strong>Division:</strong>
                                                            @if ($dashboard->division_id==1)
                                                            Dhaka
                                                            @elseif ($dashboard->division_id==2)
                                                            chattogram
                                                            @elseif ($dashboard->division_id==3)
                                                            rajshahi
                                                            @elseif ($dashboard->division_id==4)
                                                            khulna
                                                            @elseif ($dashboard->division_id==5)
                                                            barishal
                                                            @elseif ($dashboard->division_id==6)
                                                            sylhet
                                                            @elseif ($dashboard->division_id==7)
                                                            rangpur
                                                            @elseif ($dashboard->division_id==8)
                                                            mymensingh

                                                            @endif

                                                             . <strong>District:</strong>
                                                             @if ($dashboard->district_id == 1)
                                                             cumilla
                                                             @elseif($dashboard->district_id == 2)
                                                             feni
                                                             @elseif($dashboard->district_id == 3)
                                                             brahmanbaria
                                                             @elseif($dashboard->district_id == 4)
                                                             rangamati
                                                             @elseif($dashboard->district_id == 5)
                                                             noakhali
                                                             @elseif($dashboard->district_id == 6)
                                                             chandpur
                                                             @elseif($dashboard->district_id == 7)
                                                             lakshmipur
                                                             @elseif($dashboard->district_id == 8)
                                                             chattogram
                                                             @elseif($dashboard->district_id == 9)
                                                             coxsbazar
                                                             @elseif($dashboard->district_id == 10)
                                                             khagrachari
                                                             @elseif($dashboard->district_id == 11)
                                                             bandarban
                                                             @elseif($dashboard->district_id == 12)
                                                             sirajganj
                                                             @elseif($dashboard->district_id == 13)
                                                             pabna
                                                             @elseif($dashboard->district_id == 14)
                                                             bogura
                                                             @elseif($dashboard->district_id == 15)
                                                             rajshahi
                                                             @elseif($dashboard->district_id == 16)
                                                             natore
                                                             @elseif($dashboard->district_id == 17)
                                                             jaipurhat
                                                             @elseif($dashboard->district_id == 18)
                                                             nawabganj
                                                             @elseif($dashboard->district_id == 19)
                                                             naogaon
                                                             @elseif($dashboard->district_id == 20)
                                                             jashore
                                                             @elseif($dashboard->district_id == 21)
                                                             satkhira
                                                             @elseif($dashboard->district_id == 22)
                                                             meherpur
                                                             @elseif($dashboard->district_id == 23)
                                                             narail
                                                             @elseif($dashboard->district_id == 24)
                                                             chuadanga
                                                             @elseif($dashboard->district_id == 25)
                                                             kushtia
                                                             @elseif($dashboard->district_id == 26)
                                                             magura
                                                             @elseif($dashboard->district_id == 27)
                                                             khulna
                                                             @elseif($dashboard->district_id == 28)
                                                             bagerhat
                                                             @elseif($dashboard->district_id == 29)
                                                             jhenaidah
                                                             @elseif($dashboard->district_id == 30)
                                                             barishal
                                                             @elseif($dashboard->district_id == 31)
                                                             jhalokati
                                                             @elseif($dashboard->district_id == 32)
                                                             patuakhali
                                                             @elseif($dashboard->district_id == 33)
                                                             pirojpur
                                                             @elseif($dashboard->district_id == 34)
                                                             bhola
                                                             @elseif($dashboard->district_id == 35)
                                                             barguna
                                                             @elseif($dashboard->district_id == 36)
                                                             sylhet
                                                             @elseif($dashboard->district_id == 37)
                                                             moulvibazar
                                                             @elseif($dashboard->district_id == 38)
                                                             habiganj
                                                             @elseif($dashboard->district_id == 39)
                                                             sunamganj
                                                             @elseif($dashboard->district_id == 40)
                                                             rangpur
                                                             @elseif($dashboard->district_id == 41)
                                                             panchagarh
                                                             @elseif($dashboard->district_id == 42)
                                                             dinajpur
                                                             @elseif($dashboard->district_id == 43)
                                                             lalmonirhat
                                                             @elseif($dashboard->district_id == 44)
                                                             nilphamari
                                                             @elseif($dashboard->district_id == 45)
                                                             thakurgaon
                                                             @elseif($dashboard->district_id == 46)
                                                             gaibandha
                                                             @elseif($dashboard->district_id == 47)
                                                             kurigram
                                                             @elseif($dashboard->district_id == 48)
                                                             mymensingh
                                                             @elseif($dashboard->district_id == 49)
                                                             jamalpur
                                                             @elseif($dashboard->district_id == 50)
                                                             netrokona
                                                             @elseif($dashboard->district_id == 51)
                                                             sherpur
                                                             @elseif($dashboard->district_id == 52)
                                                             dhaka
                                                             @elseif($dashboard->district_id == 53)
                                                             narsingdi
                                                             @elseif($dashboard->district_id == 54)
                                                             gazipur
                                                             @elseif($dashboard->district_id == 55)
                                                             shariatpur
                                                             @elseif($dashboard->district_id == 56)
                                                             narayanganj
                                                             @elseif($dashboard->district_id == 57)
                                                             tangail
                                                             @elseif($dashboard->district_id == 58)
                                                             kishoreganj
                                                             @elseif($dashboard->district_id == 59)
                                                             manikganj
                                                             @elseif($dashboard->district_id == 60)
                                                             munshiganj
                                                             @elseif($dashboard->district_id == 61)
                                                             rajbari
                                                             @elseif($dashboard->district_id == 62)
                                                             madaripur
                                                             @elseif($dashboard->district_id == 63)
                                                             faridpur
                                                             @elseif($dashboard->district_id == 64)
                                                             gopalganj
                                                             @endif

                                                        </div>
                                                        <h6 style="text-decoration: underline">
                                                            payment number
                                                        </h6>
                                                        <div class="details">
                                                            @if ($dashboard->payment_number)
                                                            {{ $dashboard->payment_number }}
                                                            @else
                                                            .
                                                            @endif
                                                        </div>


                                            </div>
                                        </section>
                                </div>
                                <div class="tab-pane fade" id="account-change-password">
                                    <section class="student-info">
                                        <h3 style="text-decoration: underline;">Class Information</h2>
                                        <div class="student-details">
                                            <div class="">
                                                <strong>Like TO Study:</strong> {{ $dashboard->course->name }}
                                            </div>
                                            <div class="details">
                                                <strong>Number of Classes per Week:</strong> {{ $dashboard->cls_per_wk }}
                                            </div>
                                            <div class="details">
                                                <strong>Weekly Days:</strong> @php
                                                    $weeks = json_decode( $dashboard->weeks)
                                                @endphp
                                                @foreach ( $weeks as $week)
                                                    {{ $week }},
                                                @endforeach
                                            </div>
                                            {{-- <div class="details">
                                                <strong>:</strong> {{ $dashboard->suitable_time }}.
                                            </div> -
                                            <br>
                                            <h5 style="text-decoration: underline;">Tuition Fee</h5>
                                                    <div class="details">
                                                        <strong>
                                                            Tuition Fee:</strong> {{ $dashboard->tuition_fee }}.
                                                    </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="tab-pane fade" id="account-info">
                                    <div class="card-body pb-2">
                                        <div class="form-group">
                                            <label class="form-label">Batch Name:</label>
                                            @if ($batch == !null)
                                            <strong style="color: black;">{{ $batch->batch->title }}</strong>
                                            @endif
                                        </div>




                                        <table class="newspaper-n">
                                            {{-- <caption>প্রথম শ্রেণির (রাজস্ব) কর্মচারীদের তালিকা</caption> -
                                            <tbody>
                                                <tr>
                                                    <th align="center">SL NO</th>
                                                    <th align="left">Link</th>
                                                    <th align="center">Date</th>
                                                    <th align="center">Time</th>
                                                </tr>
                                                @if ( count($lives) > 0)
                                                @foreach ( $lives as $key=> $live )
                                                    <tr>
                                                        <td align="center">{{ $key+1 }}</td>
                                                        <td align=""><a href="{{  $live->link }}">{{ Str::substr( $live->link, 0, 25) }}..</a></td>
                                                        <td align="center">{{ $live->date }}</td>
                                                        <td align="center">{{ $live->time }}</td>
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    <tr>
                                                        <td colspan="4" class="text-center">No Live Class found</td>
                                                    </tr>
                                                    @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span style="padding-left:28px;color:red;" >* Alhamdulillah, your registration has been completed successfully. Class schedule will be informed to you through SMS Inshallah. <span>
                    </div>
                </div>
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
                <li><i class="fas fa-angle-double-right"></i> Student Profile</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Students Information Starts Here ####### -->

<div class="row contact-rooo no-margin">
    <div class="container d-flex justify-content-center">
        <div class="card" style="padding:20px">
            <div class="row g-5">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Class Information</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">Batch</a>
                        <a class="list-group-item list-group-item-action" href="{{ route('logout') }}">Logout</a> 
                        <hr>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <section class="student-info">
                                <h3 style="text-decoration: underline;">Student Information</h2>
                                    <div class="student-details">
                                        <div class="">
                                            <strong>Name:</strong> {{ $dashboard->name }}
                                        </div>
                                        <div class="details">
                                            <strong>User-Name</strong> {{ $dashboard->code->user_name }}
                                        </div>
                                        <div class="details">
                                            <strong>Student ID:</strong> {{ $dashboard->code->code }}
                                        </div>

                                        <div class="details">
                                            <strong>Date Of Birth:</strong> {{ $dashboard->date }}/{{ $dashboard->month }}/{{ $dashboard->year }}.
                                        </div>
                                        <div class="details">
                                            <strong>Country:</strong> {{ $dashboard->countryplacejoining }}.
                                        </div>
                                        <div class="details">
                                            <strong>Father's Name:</strong> {{ $dashboard->fathername }}.
                                        </div>
                                        <div>
                                            <strong>Mother's Name:</strong> {{ $dashboard->mothername }}.
                                        </div>
                                        <div class="details">
                                            <strong>Gender:</strong> {{ $dashboard->gender }}.
                                        </div>
                                        <div class="details">
                                            <strong>Phone:</strong> {{ $dashboard->phone_number }}.
                                        </div>
                                        <div>
                                            <strong>WhatsApp:</strong> {{ $dashboard->whatsapp_number }}.
                                        </div>
                                        <br>
                                        <h5 style="text-decoration: underline;">Present Adress</h5>
                                            <div class="details">
                                                <strong>
                                                    Vill/Town/City/Post Office:</strong> {{ $dashboard->post_code }}.
                                            </div>
                                            <div class="details">
                                                <strong>Thana:</strong> {{ $dashboard->thana }}.
                                                <strong>Division:</strong>
                                                    @if ($dashboard->division_id==1)
                                                    Dhaka
                                                    @elseif ($dashboard->division_id==2)
                                                    chattogram
                                                    @elseif ($dashboard->division_id==3)
                                                    rajshahi
                                                    @elseif ($dashboard->division_id==4)
                                                    khulna
                                                    @elseif ($dashboard->division_id==5)
                                                    barishal
                                                    @elseif ($dashboard->division_id==6)
                                                    sylhet
                                                    @elseif ($dashboard->division_id==7)
                                                    rangpur
                                                    @elseif ($dashboard->division_id==8)
                                                    mymensingh

                                                    @endif

                                                     . <strong>District:</strong>
                                                     @if ($dashboard->district_id == 1)
                                                     cumilla
                                                     @elseif($dashboard->district_id == 2)
                                                     feni
                                                     @elseif($dashboard->district_id == 3)
                                                     brahmanbaria
                                                     @elseif($dashboard->district_id == 4)
                                                     rangamati
                                                     @elseif($dashboard->district_id == 5)
                                                     noakhali
                                                     @elseif($dashboard->district_id == 6)
                                                     chandpur
                                                     @elseif($dashboard->district_id == 7)
                                                     lakshmipur
                                                     @elseif($dashboard->district_id == 8)
                                                     chattogram
                                                     @elseif($dashboard->district_id == 9)
                                                     coxsbazar
                                                     @elseif($dashboard->district_id == 10)
                                                     khagrachari
                                                     @elseif($dashboard->district_id == 11)
                                                     bandarban
                                                     @elseif($dashboard->district_id == 12)
                                                     sirajganj
                                                     @elseif($dashboard->district_id == 13)
                                                     pabna
                                                     @elseif($dashboard->district_id == 14)
                                                     bogura
                                                     @elseif($dashboard->district_id == 15)
                                                     rajshahi
                                                     @elseif($dashboard->district_id == 16)
                                                     natore
                                                     @elseif($dashboard->district_id == 17)
                                                     jaipurhat
                                                     @elseif($dashboard->district_id == 18)
                                                     nawabganj
                                                     @elseif($dashboard->district_id == 19)
                                                     naogaon
                                                     @elseif($dashboard->district_id == 20)
                                                     jashore
                                                     @elseif($dashboard->district_id == 21)
                                                     satkhira
                                                     @elseif($dashboard->district_id == 22)
                                                     meherpur
                                                     @elseif($dashboard->district_id == 23)
                                                     narail
                                                     @elseif($dashboard->district_id == 24)
                                                     chuadanga
                                                     @elseif($dashboard->district_id == 25)
                                                     kushtia
                                                     @elseif($dashboard->district_id == 26)
                                                     magura
                                                     @elseif($dashboard->district_id == 27)
                                                     khulna
                                                     @elseif($dashboard->district_id == 28)
                                                     bagerhat
                                                     @elseif($dashboard->district_id == 29)
                                                     jhenaidah
                                                     @elseif($dashboard->district_id == 30)
                                                     barishal
                                                     @elseif($dashboard->district_id == 31)
                                                     jhalokati
                                                     @elseif($dashboard->district_id == 32)
                                                     patuakhali
                                                     @elseif($dashboard->district_id == 33)
                                                     pirojpur
                                                     @elseif($dashboard->district_id == 34)
                                                     bhola
                                                     @elseif($dashboard->district_id == 35)
                                                     barguna
                                                     @elseif($dashboard->district_id == 36)
                                                     sylhet
                                                     @elseif($dashboard->district_id == 37)
                                                     moulvibazar
                                                     @elseif($dashboard->district_id == 38)
                                                     habiganj
                                                     @elseif($dashboard->district_id == 39)
                                                     sunamganj
                                                     @elseif($dashboard->district_id == 40)
                                                     rangpur
                                                     @elseif($dashboard->district_id == 41)
                                                     panchagarh
                                                     @elseif($dashboard->district_id == 42)
                                                     dinajpur
                                                     @elseif($dashboard->district_id == 43)
                                                     lalmonirhat
                                                     @elseif($dashboard->district_id == 44)
                                                     nilphamari
                                                     @elseif($dashboard->district_id == 45)
                                                     thakurgaon
                                                     @elseif($dashboard->district_id == 46)
                                                     gaibandha
                                                     @elseif($dashboard->district_id == 47)
                                                     kurigram
                                                     @elseif($dashboard->district_id == 48)
                                                     mymensingh
                                                     @elseif($dashboard->district_id == 49)
                                                     jamalpur
                                                     @elseif($dashboard->district_id == 50)
                                                     netrokona
                                                     @elseif($dashboard->district_id == 51)
                                                     sherpur
                                                     @elseif($dashboard->district_id == 52)
                                                     dhaka
                                                     @elseif($dashboard->district_id == 53)
                                                     narsingdi
                                                     @elseif($dashboard->district_id == 54)
                                                     gazipur
                                                     @elseif($dashboard->district_id == 55)
                                                     shariatpur
                                                     @elseif($dashboard->district_id == 56)
                                                     narayanganj
                                                     @elseif($dashboard->district_id == 57)
                                                     tangail
                                                     @elseif($dashboard->district_id == 58)
                                                     kishoreganj
                                                     @elseif($dashboard->district_id == 59)
                                                     manikganj
                                                     @elseif($dashboard->district_id == 60)
                                                     munshiganj
                                                     @elseif($dashboard->district_id == 61)
                                                     rajbari
                                                     @elseif($dashboard->district_id == 62)
                                                     madaripur
                                                     @elseif($dashboard->district_id == 63)
                                                     faridpur
                                                     @elseif($dashboard->district_id == 64)
                                                     gopalganj
                                                     @endif
                                            </div>
                                            <br>
                                            <h5 style="text-decoration: underline;">Permanent Adress</h2>
                                                <div class="details">
                                                    <strong>
                                                        Vill/Town/City/Post Office:</strong> {{ $dashboard->p_postcode }}.
                                                </div>
                                                <div class="details">
                                                    <strong>Thana:</strong> {{ $dashboard->P_thana }}.
                                                    <strong>Division:</strong>
                                                    @if ($dashboard->division_id==1)
                                                    Dhaka
                                                    @elseif ($dashboard->division_id==2)
                                                    chattogram
                                                    @elseif ($dashboard->division_id==3)
                                                    rajshahi
                                                    @elseif ($dashboard->division_id==4)
                                                    khulna
                                                    @elseif ($dashboard->division_id==5)
                                                    barishal
                                                    @elseif ($dashboard->division_id==6)
                                                    sylhet
                                                    @elseif ($dashboard->division_id==7)
                                                    rangpur
                                                    @elseif ($dashboard->division_id==8)
                                                    mymensingh

                                                    @endif

                                                     . <strong>District:</strong>
                                                     @if ($dashboard->district_id == 1)
                                                     cumilla
                                                     @elseif($dashboard->district_id == 2)
                                                     feni
                                                     @elseif($dashboard->district_id == 3)
                                                     brahmanbaria
                                                     @elseif($dashboard->district_id == 4)
                                                     rangamati
                                                     @elseif($dashboard->district_id == 5)
                                                     noakhali
                                                     @elseif($dashboard->district_id == 6)
                                                     chandpur
                                                     @elseif($dashboard->district_id == 7)
                                                     lakshmipur
                                                     @elseif($dashboard->district_id == 8)
                                                     chattogram
                                                     @elseif($dashboard->district_id == 9)
                                                     coxsbazar
                                                     @elseif($dashboard->district_id == 10)
                                                     khagrachari
                                                     @elseif($dashboard->district_id == 11)
                                                     bandarban
                                                     @elseif($dashboard->district_id == 12)
                                                     sirajganj
                                                     @elseif($dashboard->district_id == 13)
                                                     pabna
                                                     @elseif($dashboard->district_id == 14)
                                                     bogura
                                                     @elseif($dashboard->district_id == 15)
                                                     rajshahi
                                                     @elseif($dashboard->district_id == 16)
                                                     natore
                                                     @elseif($dashboard->district_id == 17)
                                                     jaipurhat
                                                     @elseif($dashboard->district_id == 18)
                                                     nawabganj
                                                     @elseif($dashboard->district_id == 19)
                                                     naogaon
                                                     @elseif($dashboard->district_id == 20)
                                                     jashore
                                                     @elseif($dashboard->district_id == 21)
                                                     satkhira
                                                     @elseif($dashboard->district_id == 22)
                                                     meherpur
                                                     @elseif($dashboard->district_id == 23)
                                                     narail
                                                     @elseif($dashboard->district_id == 24)
                                                     chuadanga
                                                     @elseif($dashboard->district_id == 25)
                                                     kushtia
                                                     @elseif($dashboard->district_id == 26)
                                                     magura
                                                     @elseif($dashboard->district_id == 27)
                                                     khulna
                                                     @elseif($dashboard->district_id == 28)
                                                     bagerhat
                                                     @elseif($dashboard->district_id == 29)
                                                     jhenaidah
                                                     @elseif($dashboard->district_id == 30)
                                                     barishal
                                                     @elseif($dashboard->district_id == 31)
                                                     jhalokati
                                                     @elseif($dashboard->district_id == 32)
                                                     patuakhali
                                                     @elseif($dashboard->district_id == 33)
                                                     pirojpur
                                                     @elseif($dashboard->district_id == 34)
                                                     bhola
                                                     @elseif($dashboard->district_id == 35)
                                                     barguna
                                                     @elseif($dashboard->district_id == 36)
                                                     sylhet
                                                     @elseif($dashboard->district_id == 37)
                                                     moulvibazar
                                                     @elseif($dashboard->district_id == 38)
                                                     habiganj
                                                     @elseif($dashboard->district_id == 39)
                                                     sunamganj
                                                     @elseif($dashboard->district_id == 40)
                                                     rangpur
                                                     @elseif($dashboard->district_id == 41)
                                                     panchagarh
                                                     @elseif($dashboard->district_id == 42)
                                                     dinajpur
                                                     @elseif($dashboard->district_id == 43)
                                                     lalmonirhat
                                                     @elseif($dashboard->district_id == 44)
                                                     nilphamari
                                                     @elseif($dashboard->district_id == 45)
                                                     thakurgaon
                                                     @elseif($dashboard->district_id == 46)
                                                     gaibandha
                                                     @elseif($dashboard->district_id == 47)
                                                     kurigram
                                                     @elseif($dashboard->district_id == 48)
                                                     mymensingh
                                                     @elseif($dashboard->district_id == 49)
                                                     jamalpur
                                                     @elseif($dashboard->district_id == 50)
                                                     netrokona
                                                     @elseif($dashboard->district_id == 51)
                                                     sherpur
                                                     @elseif($dashboard->district_id == 52)
                                                     dhaka
                                                     @elseif($dashboard->district_id == 53)
                                                     narsingdi
                                                     @elseif($dashboard->district_id == 54)
                                                     gazipur
                                                     @elseif($dashboard->district_id == 55)
                                                     shariatpur
                                                     @elseif($dashboard->district_id == 56)
                                                     narayanganj
                                                     @elseif($dashboard->district_id == 57)
                                                     tangail
                                                     @elseif($dashboard->district_id == 58)
                                                     kishoreganj
                                                     @elseif($dashboard->district_id == 59)
                                                     manikganj
                                                     @elseif($dashboard->district_id == 60)
                                                     munshiganj
                                                     @elseif($dashboard->district_id == 61)
                                                     rajbari
                                                     @elseif($dashboard->district_id == 62)
                                                     madaripur
                                                     @elseif($dashboard->district_id == 63)
                                                     faridpur
                                                     @elseif($dashboard->district_id == 64)
                                                     gopalganj
                                                     @endif

                                                </div>
                                                <h6 style="text-decoration: underline">
                                                    payment number
                                                </h6>
                                                <div class="details">
                                                    @if ($dashboard->payment_number)
                                                    {{ $dashboard->payment_number }}
                                                    @else
                                                    .
                                                    @endif
                                                </div>
                                    </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <section class="student-info">
                                <h3 style="text-decoration: underline;">Class Information</h2>
                                    <div class="student-details">
                                        <div class="">
                                            <strong>Like TO Study:</strong> {{ $dashboard->course->name }}
                                        </div>
                                        <div class="details">
                                            <strong>Number of Classes per Week:</strong> {{ $dashboard->cls_per_wk }}
                                        </div>
                                        <div class="details">
                                            <strong>Weekly Days:</strong> @php
                                                $weeks = json_decode( $dashboard->weeks)
                                            @endphp
                                            @foreach ( $weeks as $week)
                                                {{ $week }},
                                            @endforeach
                                        </div>
                                        <div class="details">
                                            <strong>Suitable Time :</strong> {{ $dashboard->suitable_time }}.
                                        </div> -
                                        <br>
                                        <h5 style="text-decoration: underline;">Admission Fee</h5>
                                                <div class="details">
                                                    <strong>
                                                        Tuition Fee:</strong> 1000Tk.
                                                </div>
                                        <h5 style="text-decoration: underline;">Course Fee</h5>
                                                <div class="details">
                                                    <strong>
                                                        Tuition Fee:</strong> {{ $dashboard->tuition_fee }}.
                                                </div>
                                        <h5 style="text-decoration: underline;">Total Amount</h5>
                                                <div class="details">
                                                    <strong>
                                                        Tuition Fee:</strong> {{ $dashboard->total_amount }}.
                                                </div>
                                    </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <h5 class="form-label">Batch Name: Quran Reading</h5>
                                </div>
                                <table class="table table-hover table-bordered">
                                    <tbody>
                                        <tr>
                                            <th align="center">SL NO</th>
                                            <th align="left">Link</th>
                                            <th align="center">Date</th>
                                            <th align="center">Time</th>
                                        </tr>
                                        @if ( count($lives) > 0)
                                        @foreach ( $lives as $key=> $live )
                                            <tr>
                                                <td align="center">{{ $key+1 }}</td>
                                                <td align=""><a href="{{  $live->link }}">{{ Str::substr( $live->link, 0, 25) }}..</a></td>
                                                <td align="center">{{ $live->date }}</td>
                                                <td align="center">{{ $live->time }}</td>
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                                <td colspan="4" class="text-center">No Live Class found</td>
                                            </tr>
                                            @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="mt-5" style="padding-left:28px;color:red;">* Alhamdulillah, your registration has been
                    completed successfully. Class schedule will be informed to you through SMS
                    Inshallah. <span>
            </div>
        </div>
    </div>
</div>

@endsection
