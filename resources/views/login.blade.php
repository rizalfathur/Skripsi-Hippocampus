<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login</title>
</head>
<body>
<div class="center">
    <img src="{{asset('/image/hippocampus.png')}}" alt="">
   <!-- <h1>Login</h1>-->
    <form action="{{ url('home/user') }}" method="GET">
        <div class="txt_field">
            @csrf
            <input type="text" name="uname" required>
            <span></span>
            <label for="uname">Username</label>
        </div>
        <div class="txt_field">    
            <input type="password" name="psw" required>
            <span></span>
            <label for="psw">Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="sign_up">
            Don't have an account? <a href="{{ url('register') }}">Register</a>
        </div>
    </form>
</div>
</body>
</html>