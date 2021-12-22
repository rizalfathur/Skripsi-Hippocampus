<!-- menghubungkan dengan view template masteruser -->
@extends('masteruser')

<!-- isi bagian title -->
@section('title', 'Pengaturan Profil')

<!-- isi bagian judul_halaman -->
@section('judul_halaman', 'profile')

<!-- isi bagian konten -->
@section('konten')

<!-- memanggil data dari database yang sudah disimpan ke dalam variabel $pengguna -->

<div class="page-content">

<div class="profile-content">
    <div class="title-content">
    <h3 id="tit-prof">PROFILE</h3>
    </div>
    <div class="prof-img">
        <center> <img src="{{ url('image/profile.jpg') }}" alt="" > </center>
    </div>
    <form action="/prof_edit" method="post">
        @csrf
    <div class="content-prof">
    <input type="hidden" name="id" class="cat" value="{{ session('id') }}">
     <h6 class="cat">NAMA : </h6>
     <input type="text" name="name" class="cat" value="{{ session('name') }}">
     <h6 class="cat">EMAIL :</h6>
     <input type="text" name="email" class="cat" value="{{ session('email') }}">
    <h6 class="cat">NOMOR HP :</h6>
    <input type="text" name="no_hp" class="cat" value="{{ session('no_hp') }}">
     <h6 class="cat">UNIVERSITAS :</h6>
     <input type="text" name="universitas" class="cat" value="{{ session('universitas') }}">
    </div>
    <div class="prof-acc">
    <input type="submit">
    </div>
    </form>
</div>

</div>
</div>


@endsection