@extends('masteruser')

@section('title', 'Bank Soal')

@section('judul_halaman', 'Bank Soal')

@section('konten')

<div class="page-content">

    <h5 style="text-align: center; font-weight: bold;">BANK SOAL</h5>

    <h6 style="text-align: center; margin-top: 30px; margin-bottom:30px;">Database kumpulan soal-soal <b>ujian kompetensi mahasiswa pendidikan profesi dokter</b> yang telah digelar.</h6>

    
    <table class="b-soal">
        <tr>
            <th>Soal</th>
            <th>Tahun</th>
            <th>Jumlah Soal</th>
            <th>Pembuat</th>
        </tr>
        <tr>
        <td> <a href="" id="so_name">{{ $col_1[0] }} </a></td>   
            <td> {{ $col_1[1 ]}}</td>
            <td> {{ $col_1[2] }}</td>
            <td> {{ $col_1[3] }}</td>
        </tr>
        <tr>
        <td> <a href="" id="so_name"> {{ $col_2[0] }}</a></td>   
            <td>{{ $col_2[1] }}</td>
            <td>{{ $col_2[2] }}</td>
            <td>{{ $col_2[3] }}</td>
        </tr>
        <td> <a href="" id="so_name"> {{ $col_3[0] }}</a></td>   
            <td>{{ $col_3[1] }}</td>
            <td>{{ $col_3[2] }}</td>
            <td>{{ $col_3[3] }}</td>
        </tr>
        <td> <a href="" id="so_name"> {{ $col_4[0] }}</a></td>   
            <td>{{ $col_4[1] }}</td>
            <td>{{ $col_4[2] }}</td>
            <td>{{ $col_4[3] }}</td>
        </tr>
        <td> <a href="" id="so_name"> {{ $col_5[0] }}</a></td>   
            <td>{{ $col_5[1] }}</td>
            <td>{{ $col_5[2] }}</td>
            <td>{{ $col_5[3] }}</td>
        </tr>
        <td> <a href="" id="so_name"> {{ $col_6[0] }}</a></td>   
            <td>{{ $col_6[1] }}</td>
            <td>{{ $col_6[2] }}</td>
            <td>{{ $col_6[3] }}</td>
        </tr>
        <td> <a href="" id="so_name"> {{ $col_7[0] }}</a></td>   
            <td>{{ $col_7[1] }}</td>
            <td>{{ $col_7[2] }}</td>
            <td>{{ $col_7[3] }}</td>
        </tr>
        <td> <a href="" id="so_name"> {{ $col_8[0] }}</a></td>   
            <td>{{ $col_8[1] }}</td>
            <td>{{ $col_8[2] }}</td>
            <td>{{ $col_8[3] }}</td>
        </tr>
    </table>

</div>
    
    @endsection