<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style2.css')}}">
    <title>Register</title>
    <style>
    </style>
</head>
<body>
<div class="container">
    <div class="title">Registration</div>
    <hr>
    <form action="register/store" method="post">
        @csrf
        <div class="user-details">
            <div class="input-box">
                <span class="details">Name</span>
                <input type="text" placeholder="Enter your name" required name="nama">
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" placeholder="Enter your email" required name="email">
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">Phone number</span>
                <input type="text" placeholder="Enter your phone number" required name="hp">
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">University</span>
                <input type="text" placeholder="Enter your University" required name="univ">
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">Password</span>
                <input type="password" placeholder="Enter your Password" required name="pw">
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Next">
        </div>
    </form>
</div>
</body>
</html>
<!-- <div class="user-details">
    <div class="input-box">
        <span class="details">Confirm password</span>
        <input type="password" placeholder="Confirm your password" required>
    </div> -->
<!-- </div>
<div class="gender-details">
    <input type="radio" name="gender" id="dot-1">
    <input type="radio" name="gender" id="dot-2">
    <span class="gender-title">Gender</span>
    <div class="category">
        <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
        </label>
        <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
        </label>
    </div>
</div> -->