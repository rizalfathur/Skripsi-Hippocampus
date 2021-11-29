@extends('masteruser')

@section('title', 'Pengaturan Profil')

@section('judul_halaman', 'profile')

@section('konten')



<div style="margin-left:20%;padding:40px 16px;height:100%;">

<form action="/update/user" method="post">
    @csrf
    @foreach($pengguna as $p)
           <input type="text" style="display:none;"name="id" value="{{ $p->id_pengguna}}">
           <input type="text" name="penyakit" value="{{ $p->nama }}" style="width:300px"><br>
           <input type="text" name="gejala" value="{{ $p->email }}" style="width:400px"><br>
           <input type="text" name="terapi" value="{{ $p->universitas }}">
           <input type="text" style="display:none;"name="psw" value="{{ $p->password}}">
        <input onclick="return confirm('Apakah kamu yakin?')" type="submit" value="Simpan">
    </form>
    @endforeach

</div>




@endsection