<!-- menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian title -->
@section('title', 'Pembahasan')

<!-- isi bagian kontent -->
@section('konten')
<br>
<h4>Pembahasan Try Out Ujian Kompetensi Mahasiswa Program Profesi Dokter</h4>
<div class="tambah-pemb">

</div>
<br>
<table class="center">
    <tr>
      <th style="width: 15px;">ID</th>
      <th >Judul Video</th>
      <th >Link Embed</th>
      <th >Action 
      <!-- menambah data pembahasan -->
      <a href="add_pemb" style="text-decoration: none; background:#00cc00; color: white; margin-left: 15px;border-radius: 10px; padding: 10px;">Tambah  + </a>
</th>
    </tr>
  @foreach($pemb_vid as $pv)    
    <tr>
      <td style="text-align:center; width:50px;"> {{ $pv->id_pemb }}</td>
      <td>{{ $pv->judul_pemb }}</td>
      <td>{{ $pv->link_pemb }}</td>
      <td style="width:200px;"><!-- menghapus data pembahasan -->
      <a href="pembahasan/hapus/{{$pv->id_pemb}}" style="text-decoration: none; color: white; background: red; margin-left:auto; padding:10px; border-radius:5px; opacity:90%;"> Hapus</a>
        <!-- <a href="pembahasan/hapus/{{$pv->id_pemb}}"> Hapus</a> -->
      </td>
    </tr>
  @endforeach
</table>
@endsection