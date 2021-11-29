<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/master_style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
    </style>
</head>
<body>
    <div class="title">
        <a href="{{ url('home') }}" class="active">Hippocampus</a>
        <div class="menu">
            <div class="dropdown">
                <button class="dropbtn"><i class="fa fa-user" ></i> Hi </a><i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="">Pengaturan akun</a>
                    <a href="{{ url('login') }}">Keluar</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn" >History <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="">Hasil Try out</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Utama <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="{{ url('materi') }}">Materi</a>
                    <a href="{{ url('bank_soal') }}">Bank Soal</a>
                    <a href="{{ url('pembahasan') }}">Pembahasan</a>
                    <a href="{{ url('try_out') }}">List Try out</a>
                </div>
            </div>
        </div>
    </div>
    <div class="title-resp">
        <a href="#home" class="active">Hippocampus</a>
        <div class="dropdown">
            <button class="dropbtn"><i class="fas fa-align-justify" style="margin-right: 300px; padding-top: 10px;"></i></button>
            <div id="myDropdown" class="dropdown-content">
                <br>
              <a href="{{ url('home') }}" style="padding: 16px;">UTAMA</a >
              <a href="{{ url('materi') }}">Materi</a>
              <a href="{{ url('bank_soal') }}">Bank Soal</a>
              <a href="{{ url('pembahasan') }}">Pembahasan</a>
              <hr>
              <b style="padding: 16px; "> HISTORY </b>
              <a href="{{ url('') }}"> Hasil Try Out</a>
              <hr>
              <b style="padding: 16px;">PENGATURAN</b>
              <a href="{{ url('') }}"> Pengaturan Akun</a>
              <a href="{{ url('login') }}">Keluar</a>
            </div>
          </div>
    </div>
@yield('konten')
</body>
</html>