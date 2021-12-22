<!-- menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian title -->
@section('title','Home')

<!-- isi bagian konten -->
@section('konten')

<h3>Utama</h3>
    <a href="{{ url('materi') }}">
    <div class="w3-panel w3-card-6"><h4>Materi</h4><i class="fas fa-book-open fa-7x" style="color: greenyellow;"></i>
    </div>
    </a>
    <a href="{{ url('bank_soal') }}">
    <div class="w3-panel w3-card-6" ><h4>Bank Soal</h4><i class="fas fa-folder-open fa-7x" style="color: goldenrod;"></i></div>
    </a>
    <a href="{{ url('pembahasan') }}">
    <div class="w3-panel w3-card-6" ><h4>Pembahasan</h4><i class="fas fa-file-video fa-7x" style="color: red;"></i></div>
    </a>
    <a href="{{ url('manajemen_user') }}">
    <div class="w3-panel w3-card-6" ><h4>Manajemen User</h4><i class="fas fa-users fa-7x" style="color: lightseagreen;"></i></div>
    </a>
    <hr>
    <h3>Event</h3>
    <hr>
    <div class="w3-panel2 w3-card-6"><h4>Try Out v.2.0</h4><i class="fas fa-book-reader fa-7x" style="color: lightseagreen;"></i></div>
    <h3>History</h3>
    <div class="w3-panel w3-card-6"><h4>Try out v.1.0</h4><i class="fas fa-history fa-7x" style="color: lightseagreen;"></i></div>
    <hr>

@endsection