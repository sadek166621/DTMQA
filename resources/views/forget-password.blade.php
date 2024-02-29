<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* Add your custom styles here */
        main {
            padding: 20px;
        }

        .container {
            text-align: center;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Add more styles as needed */

    </style>
</head>

<body>
    <main>
        <div class="container mt-5">
            <div class="card mx-auto" style="max-width: 500px;">
                <div class="card-body">
                    <h5 class="card-title">Password Reset</h5>
                    <p class="card-text">We will send a link to your email. Use that link to reset your password.</p>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('forget.password.post') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <a href="{{ route('how-to-register') }}" style="float: right"> Back To Login Page</a>

                </div>
            </div>
        </div>
    </main>
</body>

</html>
