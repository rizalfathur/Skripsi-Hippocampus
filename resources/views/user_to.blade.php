<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try Out V.2.0</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/masteruser.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Concert One' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
    </style>
    <script>
        var count = 7200;
        var interval = setInterval(function(){
        document.getElementById('count').innerHTML=count;
        count--;
        if (count === 0){
            clearInterval(interval);
        document.getElementById('count').innerHTML='Done';
        // or...
        alert("You're out of time!");
        window.location.href="home/user";
        }
        }, 1000);
    </script>
</head>
<body>
<ul>
<div class="logo">
  <img src="{{ url('image/logo.jpg') }}" alt="">
  <li >HIPPOCAMPUS</li>
</div>
<!-- <div class="profile">
<img src="{{ url('image/profile.jpg') }}" alt="">
<h7>Salsabila P</h7>
<p>salsabila@gmail.com</p>
</div>-->
<li class="cat">Soal</li>
<div class="nav-soal">
    <div class="items-prob">1</div>
    @foreach(range(2, 149, 1) as $number)
    <div class="items-1">{{ $number }}</div>
    @endforeach
    <div class="items">150</div>
</div>

<footer>&copy; &nbsp; Hippocampus Medical Course | 2021 </footer>
</ul>
<div class="header"style="margin-left:20%;padding:8px 16px;height:43px;background: #0C4B74; color: white; width: 80%; position: fixed;">
<div class="header-div">
Try Out V.2.0
</div>
</div>

<div class="page-content">

    <div class="soal-to">
        <div class="number">150.</div>
        <div class="soal">
            <h6>Seorang laki-laki umur 60 tahun datang ke rumah sakit dengan keluhan nyeri dada kiri menjalar ke pundakdan lengan sejak 6 jam yang lalu. Pasien memiliki riawayat diabetes dan hipertensi.
            Dari pemeriksaan fisik didapatkan kesadaran compos mentis, tanda vital TD 80/60 mmHg, Nadi 60x/m, RR 22x/m.
            Pada pemeriksaan EKG didapatkan gambaran infark pada sadapan II, III, dan aVF. <br><br>
            Tatalaksana awal yang tepat pada kasus di atas adalah?</h6><br>
            <label class="container-radio"><h6>a. Aspirin 80 mg</h6>
            <input type="radio" checked="checked" name="radio">
            <span class="checkmark"></span>
            </label>
            <label class="container-radio"><h6>b. Aspirin 320 mg</h6>
            <input type="radio" name="radio">
            <span class="checkmark"></span>
            </label>
            <label class="container-radio"><h6>c. Clopidogrel 75 mg</h6>
            <input type="radio" name="radio">
            <span class="checkmark"></span>
            </label>
            <label class="container-radio"><h6>d. Isosorbid dinitrat 5 mg sublingual</h6>
            <input type="radio" name="radio">
            <span class="checkmark"></span>
            </label>
            <label class="container-radio"><h6>e. Morfin 1 mg intravena</h6>
            <input type="radio" name="radio">
            <span class="checkmark"></span>
            </label>
        </div>
    </div>
    <div class="tombol">
        <div class="prob">
            <button>Ragu-ragu</button>
          &nbsp; Waktu tersisa : <h7 id="count">  </h7> &nbsp; detik
        </div>
        <div class="back">
            <a href="">Back</a>
        </div>
        <div class="number-soal">
            150
        </div>
        <div class="next">
            <a href="">Next</a>
        </div>
        <div class="finish">
            <a href="{{ url('home/user')}}" onclick="if (confirm('Apakah kamu yakin?')){return true;}else{event.stopPropagation(); event.preventDefault();};" title="Link Title">
                Finish
            </a>
        </div>
    </div>
</div>
</body>
</html>