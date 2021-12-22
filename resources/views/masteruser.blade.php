<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/masteruser.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Concert One' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
</head>
<body>
<div class="responsive-toggle">
<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="font-size:15px;">×</a>
  <img id="resp-profile" src="{{ url('image/profile.jpg') }}" alt="">
  <h5 id="name-prof">Rizal</h5>
  <h6 id="email-prof">Rizal27@gmail.com</h6>
  <li class="cat">UTAMA</li>
  <li><a href="{{ url('home/user') }}"><i class="fas fa-home "></i>Beranda</a></li>
  <li><a href="{{ url('user_materi') }}"><i class="fas fa-book "></i>Materi</a></li>
  <li><a href="{{ url('user_bs') }}"><i class="fas fa-folder-open"></i>Bank Soal</a></li>
  <li><a href="{{ url('user_pembahasan') }}"><i class="fas fa-file-video"></i>Pembahasan</a></li>
  <li class="cat">HISTORY</li>
    <li><a href="{{ url('user_hasilto') }}"><i class="fas fa-file-alt"></i>Hasil Try Out</a></li>
  <li class="cat">LAINNYA</li>
    <li><a href="{{ url('user_profile') }}"><i class="fas fa-cog"></i>Pengaturan Akun</a></li>
    <li><a href="{{ url('login') }}"><i class="fas fa-power-off"></i>Keluar</a></li>
    <li id="footer">Hippocampus Medical Course | 2021</li>
</div>

<div class="logo">
<li style="list-style-type:none; padding-top:15px;" id="logo-hippo"><img src="{{ url('image/logo.jpg') }}" alt="">&nbsp; HIPPOCAMPUS | @yield('title')</li>
<button class="openbtn" onclick="openNav()">
 <li style="list-style-type:none;">☰</li>
</button></div>   
</div>
<ul>
<div class="logo">
  <img src="{{ url('image/logo.jpg') }}" alt="">
  <li >HIPPOCAMPUS</li>
</div>
<div class="profile">
<img src="{{ url('image/profile.jpg') }}" alt="">
<h7>{{ session('name') }}</h7>
<p>{{ session('email') }} </p>
</div>
<li class="cat">UTAMA</li>
<li><a href="{{ url('home/user') }}"><i class="fas fa-home "></i>Beranda</a></li>
<li><a href="{{ url('user_materi') }}"><i class="fas fa-book "></i>Materi</a></li>
<li><a href="{{ url('user_bs') }}"><i class="fas fa-folder-open"></i>Bank Soal</a></li>
<li><a href="{{ url('user_pembahasan') }}"><i class="fas fa-file-video"></i>Pembahasan</a></li>
<li class="cat">HISTORY</li>
  <li><a href="{{ url('user_hasilto') }}"><i class="fas fa-file-alt"></i>Hasil Try Out</a></li>
<li class="cat">LAINNYA</li>
  <li><a href="{{ url('user_profile') }}"><i class="fas fa-cog"></i>Pengaturan Akun</a></li>
  <li><a href="{{ url('logout') }}"><i class="fas fa-power-off"></i>Keluar</a></li>
  <footer>&copy; &nbsp; Hippocampus Medical Course | 2021 </footer>
</ul>
<div class="header">
<div class="header-div">
@yield('judul_halaman')
</div>
<div class="profile-div">
</div>
</div>
@yield('konten')
</body>
</html>