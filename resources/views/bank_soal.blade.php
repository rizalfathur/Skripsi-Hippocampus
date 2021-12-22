<!--menghubungkan view dengan template master -->
@extends('master')

<!-- isi bagian title -->
@section('title', 'Bank Soal')

<!-- isi bagian konten -->
@section('konten')

<h5 style="text-align: center; font-weight: bold;">BANK SOAL</h5>
<!-- tabel untuk menampilkan kumpulan soal -->
<table class="b-soal">
    <tr>
        <th>Soal</th>
        <th>Tahun</th>
        <th>Jumlah Soal</th>
        <th>Pembuat</th>
    </tr>
    @foreach($bakso as $bs)
    <tr>
        <td> <a href="{{ $bs->link_soal }}">{{ $bs->nama_soal }} </a></td>
        <td> {{ $bs->tahun_soal}}</td>
        <td> {{ $bs->jumlah_soal }}</td>
        <td> {{ $bs->pembuat }}</td>
    </tr>
    @endforeach

</table>

@endsection