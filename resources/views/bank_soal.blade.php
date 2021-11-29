@extends('master')

@section('title', 'Bank Soal')

@section('konten')

<h5 style="text-align: center; font-weight: bold;">BANK SOAL</h5>

<table class="b-soal">
    <tr>
        <th>Soal</th>
        <th>Tahun</th>
        <th>Jumlah Soal</th>
        <th>Pembuat</th>
    </tr>
    <tr>
        <td> <a href="">{{ $col_1[0] }} </a></td>
        <td> {{ $col_1[1 ]}}</td>
        <td> {{ $col_1[2] }}</td>
        <td> {{ $col_1[3] }}</td>
    </tr>
    <tr>
        <td> <a href=""> {{ $col_2[0] }}</a></td>
        <td>{{ $col_2[1] }}</td>
        <td>{{ $col_2[2] }}</td>
        <td>{{ $col_2[3] }}</td>
    </tr>
</table>

@endsection