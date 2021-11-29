@extends('masteruser')

@section('title', 'Pembahasan')

@section('judul_halaman', 'Pembahasan')

@section('konten')

<div class="page-content">

@foreach($pemb_vid as $pv)
<h5><b>{{ $pv->judul_pemb}}</b></h5>
<iframe src="{{ $pv->link_pemb}}"  width="100%" height="500px" frameborder="0" allowfullscreen="allow"></iframe>
<h6>Pada pembahasan kali ini, kita akan mengupas tuntas soal serta jawaban yang terdapat pada {{ $pv->judul_pemb }} yang berjumlah 50 soal. Mari kita lihat pada bagian mana saja yang kurang tepat dan tidak dimengerti!</h6>
<p></p>
@endforeach
</div>
@endsection