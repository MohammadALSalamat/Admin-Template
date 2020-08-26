<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="body">
    <div class="login-page">
        <img src="{{ asset('images/logo-abo.png') }}" alt="Logo">
        <p>Register with your Google Account</p>
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="card-login">
            <img src="{{ asset('images/profile.jpg') }}" alt="">
            <form action="{{ route('Insert-data') }}" method="POST">
                @csrf
                <input type="text" placeholder="User Name" name="name" class="email" required>
                <input type="text" placeholder="Email" name="email" class="email" required>
                <input type="password" placeholder="Password" name="pass" required>
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>
