@extends('master')

@section('title', 'List Try Out')

@section('konten')

<h5>PENGGUNA</h5>

<table class="center">
  <tr>
    <th style="text-align:center;">Nama</th>
    <th>Email</th>
    <th>Nomor Telepon</th>
    <th>Universitas</th>
    <th>Action</th>
  </tr>
@foreach($pengguna as $p)
  <tr>
    <td>{{ $p->nama }}</td>
    <td>{{ $p->email }}</td>
    <td>{{ $p->no_hp }}</td>
    <td>{{ $p->universitas }}</td>
    <td style="text-align:center;"><!--<a href="/manajemen_user/edit/{{ $p->id_pengguna }}" style="text-decoration:none;">Edit</a> --><a style="background: #4ceb34;  text-decoration: none; border-radius: 5px; box-shadow: 0 5px 0 darkgreen; color: white;padding: 5px; " href="/manajemen_user/hapus/{{ $p->id_pengguna }}" onclick="return confirm('Apakah benar data akan dihapus?')" style="text-decoration:none;">Hapus</a></td> 
  </tr>
@endforeach
</table>

@endsection