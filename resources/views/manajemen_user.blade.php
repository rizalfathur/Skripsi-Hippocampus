<!-- menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian title -->
@section('title', 'List Try Out')

<!-- isi bagian konten -->
@section('konten')

<h5>PENGGUNA</h5>

<!-- tabel untuk menampilkan data pengguna yang terdaftar -->
<table class="center">
<tr>
    <th style="text-align:center;">Nama</th>
    <th>Email</th>
    <th>Nomor Telepon</th>
    <th>Universitas</th>
    <th>Action</th>
 </tr>
<!-- memanggil data pengguna yang sudah diambil dari database dan disimpan ke dalamn variabel $users -->
@foreach($users as $u)
<tr>
 <td>{{ $u->name }}</td>
 <td>{{ $u->email }}</td>
    <td>{{ $u->no_hp }}</td>
    <td>{{ $u-> universitas }}</td>
    <!-- action untuk menghapus pengguna -->
    <td style="text-align:center;"><a style="background: #4ceb34;  text-decoration: none; border-radius: 5px; box-shadow: 0 5px 0 darkgreen; color: white;padding: 5px; " href="/manajemen_user/hapus/{{ $u->id }}" onclick="return confirm('Apakah benar data akan dihapus?')" style="text-decoration:none;">Hapus</a></td> 
</tr>
@endforeach
</table>

@endsection