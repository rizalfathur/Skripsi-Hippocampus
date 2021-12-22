<!-- menghubungkan dengan view template master -->
@extends('masteruser')

<!-- isi bagian title -->
@section('title', 'Pembahasan')

<!-- isi bagian judul_halaman -->
@section('judul_halaman', 'Pembahasan')

<!-- isi bagian kontent -->
@section('konten')

<div class="page-content">

<!-- memanggil data dari database yang sudah disimpan ke dalam variabel bernama $pemb_vid -->
@foreach($pemb_vid as $pv)
<h5><b>{{ $pv->judul_pemb}}</b></h5>
<iframe src="{{ $pv->link_pemb}}"  width="100%" height="500px" frameborder="0" allowfullscreen="allow"></iframe>
<h6>Pada pembahasan kali ini, kita akan mengupas tuntas soal serta jawaban yang terdapat pada {{ $pv->judul_pemb }} yang berjumlah 50 soal. Mari kita lihat pada bagian mana saja yang kurang tepat dan tidak dimengerti!</h6>
<p></p>
@endforeach
</div>
@endsection