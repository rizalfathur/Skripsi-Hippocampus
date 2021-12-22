<!-- menghubungkan view dengan template masteruser-->
@extends('masteruser')

<!--isi bagian title -->
@section('title', 'Bank Soal')

<!--isi bagian judul_halaman -->
@section('judul_halaman', 'Bank Soal')

<!--isi bagian konten -->
@section('konten')

<div class="page-content">

    <h5 style="text-align: center; font-weight: bold;">BANK SOAL</h5>

    <h6 style="text-align: center; margin-top: 30px; margin-bottom:30px;">Database kumpulan soal-soal <b>ujian kompetensi mahasiswa pendidikan profesi dokter</b> yang telah digelar.</h6>

<!--tabel untuk menampilkan kumpulan soal -->    
    <table class="b-soal">
        <tr>
            <th>Soal</th>
            <th>Tahun</th>
            <th>Jumlah Soal</th>
            <th>Pembuat</th>
        </tr>
        @foreach($bakso as $bs)
        <tr>
            <td><a href="{{ $bs->link_soal }}" id="so_name"> {{ $bs->nama_soal }}</a></td>
            <td>{{ $bs->tahun_soal }}</td>
            <td>{{ $bs->jumlah_soal}}</td>
            <td>{{ $bs->pembuat }}</td>
        @endforeach
        </tr>
    </table>

</div>
    
    @endsection