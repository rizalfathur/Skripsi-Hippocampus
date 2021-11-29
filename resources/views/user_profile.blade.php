@extends('masteruser')

@section('title', 'Pengaturan Profil')

@section('judul_halaman', 'profile')

@section('konten')

@foreach($pengguna as $p)

<div class="page-content">

<div class="profile-content">
    <div class="title-content">
    <h3 id="tit-prof">PROFILE</h3>
    </div>
    <div class="prof-img">
        <center> <img src="{{ url('image/profile.jpg') }}" alt="" > </center>
    </div>
    <div class="content-prof">
     <h6 class="cat">NAMA : </h6> <p class="val-profile">  {{ $p->nama }} </p>
     <h6 class="cat">EMAIL :</h6> <p class="val-profile"> {{ $p->no_hp }} </p>
    <h6 class="cat">NOMOR HP :</h6><p class="val-profile"> {{ $p->email }} </p>
     <h6 class="cat">UNIVERSITAS :</h6> <p class="val-profile"> {{ $p->universitas }}</p>
    </div>
    <div class="prof-acc">
        <!-- <a href="/user/edit/{{ $p->id_pengguna }}" style="text-decoration:none;">Edit</a> -->
        <a href="{{ url('home/user') }}">SELESAI</a>
    </div>
</div>

</div>
</div>



@endforeach

@endsection