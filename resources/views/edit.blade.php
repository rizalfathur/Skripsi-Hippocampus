<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Materi</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="form_edit">
    <form action="/update" method="post">
    @csrf
    @foreach($materi as $mat)
            <input type="text" style="display:none;"name="id" value="{{ $mat->id_materi}}">
        <div class="input_add">
            <h4>Penyakit :</h4>
            <textarea type="text" name="penyakit">{{ $mat->materi_penyakit }}</textarea>
        </div>
        <div class="input_add">
            <h4>Gejala : </h4>
           <textarea type="text" name="gejala">{{ $mat->materi_gejala }}</textarea>
        </div>
        <div class="input_add">
            <h4>Terapi :</h4>
           <textarea type="text" name="terapi">{{ $mat->materi_terapi }}</textarea>
           </div><br><br>
        <input onclick="return confirm('Apakah kamu yakin?')" type="submit" value="Simpan">
    @endforeach
    </form>
</div>
</body>
</html>