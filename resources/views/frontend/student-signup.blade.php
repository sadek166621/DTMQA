@extends('frontend.master')
@section('content')
{{-- <style>
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
                <h1 class="heading mt-3">Login Registration </h1>
                <a href="{{ route('how-to-register') }}">Sign In?</a>
                <article>
                    <div class="entry">

                        <br>
                        <div>
                            @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <form action="{{ route('new-student-signup') }}" method="post">
                                @csrf
                                   <label for="uname"><b>Name</b></label>
                                   <input type="text" placeholder="Enter Name" name="name" required>

                                   <label for="uname"><b>Email</b></label>
                                   <input type="email" placeholder="Enter Email" name="email" required>

                                   <label for="uname"><b>Phone</b></label>
                                   <input type="number" placeholder="Enter Phone" name="phone" required>

                                   <label for="uname"><b>User-Name</b> <span style="color: red">(You must remember this username. You will login with this*)</span></label>
                                   <input type="text" placeholder="Enter User-Name" name="user_name" id="usernameInput" required>
                                   <div id="usernameError" style="color: red;"></div> <!-- Display error message here -->

                                   <label for="psw"><b>Password</b></label>
                                   <input type="password" placeholder="Enter Password" name="password" required>

                                   <label for="psw"><b>password confirmation</b></label>
                                   <input type="password" placeholder="Enter password_confirmation" name="password_confirmation" required>

                                   <button type="submit">Sign Up</button>

                               </form>
                        </div>
                    </div>
                </article>
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
</section> --}}

<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Dream to Memorize Quran Academy</h2>
            <p class="mb-3">Learning Quran at Home</p>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Student Registration</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Donate Us Information Starts Here ####### -->

<div class="row contact-rooo no-margin">
    <div class="container">
        <div style="padding:20px">
            <h2>Account Registration</h2>
            <a class="text-danger" href="{{ route('how-to-register') }}">Sign In?</a>
            @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
            <form class="row g-3 mt-5" action="{{ route('new-student-signup') }}" method="post">
                @csrf
                <div class="col-md-12">
                    <label for="studentname" class="form-label fw-bold fw-bold"> Name</label>
                    <input name="name" type="text" class="form-control" id="studentname" placeholder="Enter Your Name" required>
                </div>
                <div class="col-md-6">
                    <label for="number" class="form-label fw-bold">Phone Number</label>
                    <input name="phone" type="number" class="form-control" id="number" placeholder="Enter Your Number" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label fw-bold">Email</label>
                    <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email" required>
                </div>
                <div class="col-md-12">
                    <label for="username" class="form-label fw-bold fw-bold">User Name (Example: DTMQA-123) <span style="color: red">(*You must remember this username. You will login with this)</span></label>
                    <input name="user_name" id="usernameInput" type="text" class="form-control"  placeholder="Enter User Name" required>
                    <div id="usernameError" style="color: red;"></div> <!-- Display error message here -->
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label fw-bold">Password</label>
                    <input name="password"  type="password" class="form-control" id="inputPassword4" placeholder="********" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label fw-bold">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control" id="inputPassword4" placeholder="********" required>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" name="status" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                            By clicking submit, I agree that my all information is true.
                        </label>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" id="submitBtn" class="btn btn-primary px-5 py-2">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@push('js')
<script>
    $(document).ready(function() {
        // Function to check the username availability
        function checkUsernameAvailability() {
            var username = $('#usernameInput').val();

            // Check if the username is empty
            if (username === '') {
                $('#usernameError').text(''); // Clear error message
                $('#submitBtn').prop('disabled', false); // Enable submit button
                return; // Exit the function without making the AJAX request
            }

            $.ajax({
                url: '{{ route('check-username-availability') }}',
                method: 'POST',
                data: { username: username, _token: '{{ csrf_token() }}' },
                success: function(response) {
                    if (response.available) {
                        $('#usernameError').text(''); // Username is available, clear error message
                        $('#submitBtn').prop('disabled', false); // Enable submit button
                    } else {
                        $('#usernameError').text('This Username Is Not Available. Use Another User-Name.');
                        $('#submitBtn').prop('disabled', true); // Disable submit button
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        // Trigger the check when the user types in the username input
        $('#usernameInput').on('input', function() {
            checkUsernameAvailability();
        });

        // Trigger the check when the form is submitted
        $('#signupForm').submit(function(event) {
            event.preventDefault();
            checkUsernameAvailability(); // Perform a final check before form submission

            // Add the form submission logic here
            // ...

            // Optionally, you can uncomment the following line if you want to submit the form even when the username is not available
            // $('#signupForm').unbind('submit').submit();
        });
    });
</script>
@endpush
