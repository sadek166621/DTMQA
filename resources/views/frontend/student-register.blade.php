
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
                <li><i class="fas fa-angle-double-right"></i> Registration</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## View Students Information Starts Here ####### -->

<div class="row contact-rooo no-margin">
    <div class="container d-flex justify-content-center">
        <div style="padding:20px">

            <form class="row g-3 mt-5" action="{{ route('student-register-form') }}" method="post"
                id="registrationForm">
                @csrf

                <input type="hidden" value="{{ Session::get('studentId') }}" name="studentId">
                <div class="col-md-12">
                    <label for="studentname" class="form-label fw-bold fw-bold">Full Name</label>
                    <input value="{{ Session::get('studentName') }}" name="name" type="text" class="form-control"
                        placeholder="Enter Your Full Name" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold fw-bold">Father Name</label>
                    <input name="fathername" type="text" class="form-control" placeholder="Enter Your Full Name"
                        required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold fw-bold">Mother Name</label>
                    <input name="mothername" type="text" class="form-control" id="studentname"
                        placeholder="Enter Your Full Name" required>
                </div>
                <div class="col-md-6">
                    <label for="birthdate" class="form-label fw-bold fw-bold">Birth Date</label>
                    <div class="row">
                        <!-- <div class="col-4"><input name="birth_date" type="day" class="form-control"></div> -->
                        <div class="col-4">
                            <select name="date" class="form-control" data-component="dropdown" required>
                                <option value="Date">Date</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select></div>
                        <div class="col-4">
                            <select name="month" class="form-control" data-component="dropdown" required>
                                <option value="month">Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <select name="year" class="form-control" data-component="dropdown" required>
                                <option value="year">Year</option>
                                <option value="2035">2035</option>
                                <option value="2034">2034</option>
                                <option value="2033">2033</option>
                                <option value="2032">2032</option>
                                <option value="2031">2031</option>
                                <option value="2030">2030</option>
                                <option value="2029">2029</option>
                                <option value="2028">2028</option>
                                <option value="2027">2027</option>
                                <option value="2026">2026</option>
                                <option value="2025">2025</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                            </select></div>

                    </div>
                </div>
                <div class="col-md-6">
                    <label for="gender" class="form-label fw-bold fw-bold">Gender</label>
                    <div>
                        <select name="gender" class="form-control" data-component="dropdown">
                            <option>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="Joining_form" class="form-label fw-bold">Country/Place (Joining From)</label>
                    <input name="countryplacejoining" type="text" class="form-control" id="Joining_form"
                        placeholder="Joining From" required>
                </div>
                <div class="col-md-6">
                    <label for="present_address" class="form-label fw-bold">Present Address</label>
                    <div class="row">
                        <div class="col-md-12">
                            <input name="care_of" type="text" class="form-control" placeholder="Care Of" required>
                        </div>
                        <div class="col-md-12">
                            <input name="village" type="text" class="form-control" placeholder="Village/House/Road/Flat" required>
                        </div>
                        <div class="col-md-12">
                            <select name="division_id" id="division_id" class="form-control" data-component="dropdown">
                                <option value="">Select Division</option>
                                @foreach($divisions as $division)
                                <option value="{{ $division->id }}">{{ ucwords($division->division_name_en) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <select name="district_id" id="district_id" class="form-control" data-component="dropdown">
                                <option selected="" value="">Select District</option>

                            </select>
                        </div>
                        <div class="col-md-12">
                            <input name="thana" type="text" class="form-control" placeholder="Post Office">
                        </div>
                        <div class="col-md-12">
                            <input name="post_code" type="text" class="form-control" placeholder="Post Code">
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex justify-content-between">
                        <label for="permanent_address" class="form-label fw-bold">Permanent Address</label>
                        <div class="form-check">
                            <input class="form-check-input" name="check_present_address" type="checkbox" id="gridCheck">
                            <small>Same as present address</small>
                            <!-- <label for="permanent_address" class="form-label fw-bold">Same as present address</label> -->
                        </div>
                    </div>

                    <div class="row" id="hide_permanent_ad">
                        <div class="col-md-12">
                            <input name="p_care_of" type="text" class="form-control" placeholder="Care Of">
                        </div>
                        <div class="col-md-12">
                            <input name="p_village" type="text" class="form-control"
                                placeholder="Village/House/Road/Flat">
                        </div>
                        <div class="col-md-12">
                            <select name="p_division_id" id="p_division_id" class="form-control"
                                data-component="dropdown">
                                <option value="">Select Division</option>
                                @foreach($divisions as $division)
                                <option value="{{ $division->id }}">{{ ucwords($division->division_name_en) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <select name="p_district_id" id="p_district_id" class="form-control"
                                data-component="dropdown">
                                <option selected="" value="">Select District</option>

                            </select>
                        </div>
                        <div class="col-md-12">
                            <input name="P_thana" type="text" class="form-control" placeholder="Post Office">
                        </div>
                        <div class="col-md-12">
                            <input name="p_postcode" type="text" class="form-control" placeholder="Post Code">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="number" class="form-label fw-bold">Phone Number</label>
                    <input name="phone_number" type="number" class="form-control" id="phone_number"
                        placeholder="Enter Your Phone Number" required>
                </div>
                <div class="col-md-6">
                    <label for="whatsapp_number" class="form-label fw-bold">WhatsApp Number</label>
                    <input name="whatsapp_number" type="number" class="form-control" id="whatsapp_number"
                        placeholder="Enter Your WhatsApp Number" required>
                </div>
                <div class="col-md-6">
                    <label for="like_to_study" class="form-label fw-bold fw-bold">What would you like to study
                        ?</label>
                    <div>
                        <select name="liketostudy" id="course" onchange="updateAmount()" class="form-control"
                            data-component="dropdown" required>
                            <option value="">Please Select</option>
                            @foreach ($courses as $course)
                            <option value="{{ $course->id }}" data-amount="{{ $course->amount }}">{{ $course->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="classes_per_week" class="form-label fw-bold fw-bold">Number of Classes per Week
                        ?</label>
                    <div>
                        <select name="cls_per_wk" class="form-control" data-component="dropdown" required>
                            <option>Please Select</option>
                            <option value="3 classes/week">3 Classes / Week</option>
                            <option value="4 classes/week">4 Classes / Week</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="select" class="form-label fw-bold fw-bold">Which weekday(s) is the best for your
                        classes? (Three Days)</label>
                    <div class="form-check">
                        <input class="form-check-input" name="weeks[]" value="Monday" type="checkbox">
                        <label for="birthdate" class="form-label fw-bold fw-bold">Monday</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="weeks[]" value="Tuesday" type="checkbox">
                        <label for="birthdate" class="form-label fw-bold fw-bold">Tuesday</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="weeks[]" value="Wednesday" type="checkbox">
                        <label for="birthdate" class="form-label fw-bold fw-bold">Wednesday</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="weeks[]" value="Thursday" type="checkbox">
                        <label for="birthdate" class="form-label fw-bold fw-bold">Thursday</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="weeks[]" value="Friday" type="checkbox">
                        <label for="birthdate" class="form-label fw-bold fw-bold">Friday</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="weeks[]" value="Saturday" type="checkbox">
                        <label for="birthdate" class="form-label fw-bold fw-bold">Saturday</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="weeks[]" value="Sunday" type="checkbox">
                        <label for="birthdate" class="form-label fw-bold fw-bold">Sunday</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="classes_per_week" class="form-label fw-bold fw-bold">Suitable time for your
                        classes?According to Dhaka Time Zone (only)</label>
                    <div>
                        <select name="suitable_time" class="form-control" data-component="dropdown" required>
                            <option value="">Please Select</option>
                            <option value="After Fajar 5.30-6.30am">After Fajar 05:30 - 06:30 AM</option>
                            <option value="After Asar 5.00-6.00pm ">After Asar 05:00 - 06:00 PM</option>
                            <option value="After Magrib 6.30-7.30pm">After Magrib 06:30 - 07:30 PM</option>
                            <option value="After Esha 9.00-10.00pm">After Esha 09:00 - 10:00 PM</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="admission_fee" class="form-label fw-bold">Admission fee</label>
                    <input type="number" readonly id="admissionFee" class="form-control" value="1"
                        placeholder="0000">
                </div>
                <div class="col-md-4">
                    <label for="tuition_fee" class="form-label fw-bold">Course Fee</label>
                    <input name="tuition_fee" readonly id="courseFee" type="number" class="form-control"
                        placeholder="0000">
                </div>
                <div class="col-md-4">
                    <label for="tuition_fee" class="form-label fw-bold">Total Amount</label>
                    <input name="total_amount" readonly id="totalAmount" type="number" class="form-control"
                        placeholder="0000">
                </div>
                <div class="col-md-12">
                    <label for="additional_comments" class="form-label fw-bold">Additional Comments</label>
                    <textarea name="comments" type="text" class="form-control" rows="3"
                        placeholder="Comments Anything"></textarea>
                </div>
                <!-- <div class="col-md-6">
                    <label for="inputEmail4" class="form-label fw-bold">Email</label>
                    <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email" required>
                </div> -->


                <div class="col-12">
                </div>
                <div class="col-12 mt-3">
                    <button type="button" class="btn btn-primary px-5 py-2" data-toggle="modal"
                        data-target="#exampleModal">Confirm</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header" style="border-bottom : 0px;">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body px-5 py-1">
                                    <form>
                                        <div class="form-group mt-4">
                                            <input class="form-check-input" name="status" type="checkbox"
                                                id="gridCheck" required>
                                            <label class="form-check-label" for="gridCheck">
                                                And do not mix the truth with falsehood or conceal the truth while
                                                you know [it]. [Al-Baqara 2: 42] I hereby certify that the
                                                information provided in this form is complete, true and correct to
                                                my knowledge. I will try to finish my course completely.
                                            </label>
                                        </div>
                                        <div class="form-group mt-2 mb-4">
                                            <label class="form-check-label" for="gridCheck">
                                                I am not affiliated with any terrorist activities or political
                                                party.
                                            </label>
                                        </div>
                                        <div class="d-flex justify-content-end mb-2">
                                            <button type="submit" class="btn text-white"
                                                style="background-color: #43cb89;">Submit & Pay via bKash</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function () {
        var checkbox = $('#gridCheck');
        var hideDiv = $('#hide_permanent_ad');

        checkbox.on('change', function () {
            hideDiv.toggle(!checkbox.prop('checked'));
        });
    });

</script>

<script>
    JotForm.showJotFormPowered = "new_footer";

</script>
<script>
    JotForm.poweredByText = "Powered by Jotform";

</script><input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="232768579941474" />
<script type="text/javascript">
    var all_spc = document.querySelectorAll("form[id='232768579941474'] .si" + "mple" + "_spc");
    for (var i = 0; i < all_spc.length; i++) {
        all_spc[i].value = "232768579941474-232768579941474";
    }

</script>
<script type="text/javascript">
    JotForm.isNewSACL = true;

</script>
<script>
    $(document).ready(function () {

        $("#select_income").change(function () {
            // const atr = [500, 1000, 1500, 2000, 2500, 3000, 3500];
            // alert(atr[$(this).val()]);
            // $("#tuiton_fee").atr[$(this).val()];
            //document.getElementById('tuiton_fee').value = this.value;
            $('#tuiton_fee').val(this.value);
        });
    });

</script>
<!--  Division To District Show Ajax -->
<script type="text/javascript">
    $(document).ready(function () {
        $('select[name="division_id"]').on('change', function () {
            // alert('dd');
            var division_id = $(this).val();
            if (division_id) {
                $.ajax({
                    url: "{{  url('/division-district/ajax') }}/" + division_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="district_id"]').html(
                            '<option value="" selected="" disabled="">Select District</option>'
                            );
                        $.each(data, function (key, value) {
                            $('select[name="district_id"]').append(
                                '<option value="' + value.id + '">' +
                                capitalizeFirstLetter(value.district_name_en) +
                                '</option>');
                        });
                        $('select[name="upazilla_id"]').html(
                            '<option value="" selected="" disabled="">Select District</option>'
                            );
                    },
                });
            } else {
                alert('danger');
            }
        });

        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    });

</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('select[name="p_division_id"]').on('change', function () {
            // alert('dd');
            var p_division_id = $(this).val();
            if (p_division_id) {
                $.ajax({
                    url: "{{  url('/division-district/ajax') }}/" + p_division_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="p_district_id"]').html(
                            '<option value="" selected="" disabled="">Select District</option>'
                            );
                        $.each(data, function (key, value) {
                            $('select[name="p_district_id"]').append(
                                '<option value="' + value.id + '">' +
                                capitalizeFirstLetter(value.district_name_en) +
                                '</option>');
                        });
                        $('select[name="upazilla_id"]').html(
                            '<option value="" selected="" disabled="">Select District</option>'
                            );
                    },
                });
            } else {
                alert('danger');
            }
        });

        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    });

</script>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>

<script>
    function updateAmount() {
        var courseSelect = document.getElementById('course');
        var courseFeeInput = document.getElementById('courseFee');
        var admissionFeeInput = document.getElementById('admissionFee');
        var totalAmountInput = document.getElementById('totalAmount');

        var courseId = courseSelect.value;

        // Make an AJAX request to get the course fee
        $.ajax({
            url: '/get-course-fee/' + courseId,
            type: 'GET',
            success: function (response) {
                // Update the course fee input
                courseFeeInput.value = response.courseFee;

                // Calculate total amount
                var totalAmount = parseInt(admissionFeeInput.value) + parseInt(courseFeeInput.value);

                // Update the total amount input
                totalAmountInput.value = totalAmount;
            },
            error: function (error) {
                console.error('Error fetching course fee:', error);
                alert('Please Select Your Course')
            }
        });
    }

</script>

@endpush
