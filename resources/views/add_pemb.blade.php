@extends('master')

@section('title', 'Tambah Pembahasan')

@section('konten')

<h2>Tambah Pembahasan</h2>
<div class="form_tambah">
<form action="/addProc" method="post">
    @csrf
    <div class="input_add">
    <h4>Judul</h4>
    <input type="text" name="judul" required>
    </div>
    <div class="input_add">
    <h4> Link Embed Youtube </h4>
    <input type="text" name="link" required>
    </div>
    <input type="submit">
</form>
</div>


@endsection