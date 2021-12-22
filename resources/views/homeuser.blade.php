<!-- menghubungkan dengan view template masteruser -->
@extends('masteruser')

<!-- isi bagian title -->
@section('title', 'Beranda')
<!-- isi bagian judul_halaman -->
@section('judul_halaman', 'Beranda')

<!-- isi bagian kontent -->
@section('konten')

<!-- menu-menu yang ditampilkan pada halaman homeuser -->
<div class="page-content">
<div class="container">
    <div class="item">
        <h2>EVENT BARU TELAH HADIR!</h2>
        <h4>Try Out V.2.0 sudah ada lho!</h4>
        <p>Try Out V.2.0 kali ini lebih menantang lho! Terdiri dari 150 soal dan harus selesai dalam 100 menit! Yuk persiapkan diri kalian!</p><br>
        <a href="{{ url('to_page') }}" id="to">Lihat Try Out</a>
    </div>
</div>
<br>
    <div class="content-3">
        <h3>Fitur tersedia</h3><br>
    </div>

<div class="container-2">
    <div class="item-3"><a href="{{ url('bank_soal') }}">
    <div class="w3-panel w3-card-6" ><h4>Bank Soal</h4></div>
    </a>
    <p>Sekumpulan soal-soal UKMPPD yang telah dihimpun ke dalam basis data Hippocampus</p>
    <a href="{{ url('user_bs') }}" id="lebih_lanjut">Masuk</a>
    </div>
    <div class="item-4">
        <a href="{{ url('materi') }}">
            <div class="w3-panel w3-card-6"><h4>Materi</h4>
            </div>
        </a>
        <p>Mempelajari materi-materi yang menjadi dasar pengujian UKMPPD</p>
        <a href="{{ url('user_materi') }}" id="lebih_lanjut">Masuk</a>    </div>
    <div class="item-5"><a href="{{ url('pembahasan') }}">
    <div class="w3-panel w3-card-6" ><h4>Pembahasan</h4></div>
    </a>
        <p>Bahas soal try out serta ujian-ujian tahun 2013 - 2020</p>
        <a href="{{ url('user_pembahasan') }}" id="lebih_lanjut">Masuk</a></div>
    
</div>
<div class="container-3">
<div class="content-item"><a href="{{ url('bank_soal') }}">
    <div class="w3-panel w3-card-6" ><h4>Bank Soal</h4></div>
    </a>
    <p>Sekumpulan soal-soal UKMPPD yang telah dihimpun ke dalam basis data Hippocampus</p>
    <a href="{{ url('user_bs') }}" id="lebih_lanjut">Masuk</a>
    </div>
    <div class="content-item">
        <a href="{{ url('materi') }}">
            <div class="w3-panel w3-card-6"><h4>Materi</h4>
            </div>
        </a>
        <p>Mempelajari materi-materi yang menjadi dasar pengujian UKMPPD</p>
        <a href="{{ url('user_materi') }}" id="lebih_lanjut">Masuk</a>    </div>
    <div class="content-item"><a href="{{ url('pembahasan') }}">
    <div class="w3-panel w3-card-6" ><h4>Pembahasan</h4></div>
    </a>
        <p>Bahas soal try out serta ujian-ujian tahun 2013 - 2020</p>
        <a href="{{ url('user_pembahasan') }}" id="lebih_lanjut">Masuk</a></div>
</div>

</div>

@endsection