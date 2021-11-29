@extends('masteruser')

@section('title', 'Try Out')
@section('judul_halaman', 'Try Out')

@section('konten')


<div class="page-content">
<div class="container">
    <div class="item"><br>
        <h2>Try Out V.2.0</h2>
        <p>Try Out V.2.0 kali ini lebih menantang lho! br Terdiri dari 150 soal dan harus selesai dalam 100 menit! Tunggu apalagi?</p><br>
        <a href="{{ url('user_to') }}" id="to">Mulai</a>
    </div>
</div>
</div>

@endsection