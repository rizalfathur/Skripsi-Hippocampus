@extends('master')

@section('title', 'Pembahasan')

@section('konten')

<h4>Pembahasan Try Out Ujian Kompetensi Mahasiswa Program Profesi Dokter</h4>

@foreach($pemb_vid as $pv)
<h5>{{ $pv->judul_pemb}}</h5>

<p align="center"><iframe src="{{ $pv->link_pemb}}" frameborder="0" allowfullscreen="allow"></iframe></p>
@endforeach
@endsection