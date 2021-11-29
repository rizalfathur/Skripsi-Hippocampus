@extends('master')

@section('title', 'Materi')

@section('konten')

<h4>Materi Ujian Kompetensi Mahasiswa Pendidikan Profesi Dokter</h4>
<table class="center">
<tr>
    <th colspan="3">&nbsp;BEDAH ANAK</th>
    <th>Action <a href="/materi/tambah" style="text-decoration: none; background:#00cc00; color: white; margin-left: 15px;border-radius: 10px; padding: 10px;">TAMBAH DATA</a>
</th>
</tr>
@foreach($materi as $mat)
<tr>
    <td>{{ $mat->materi_penyakit }}</td>
    <td>{{ $mat->materi_gejala }}</td>
    <td>{{ $mat->materi_terapi }}</td>
    <td><center><a href="/materi/edit/{{ $mat->id_materi }}" style="text-decoration:none;">Edit</a>&emsp;&emsp;<a href="/materi/hapus/{{ $mat->id_materi }}" onclick="return confirm('Apakah benar data akan dihapus?')" style="text-decoration:none;">Hapus</a></center></td>
    
</tr>
@endforeach
</table>

@endsection