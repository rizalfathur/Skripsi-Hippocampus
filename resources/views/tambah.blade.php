<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<h3 style="text-align:center; color: white;">TAMBAH DATA MATERI UKMPPD</h3>
<div class="form_tambah">
<form action="/materi/tambah/proses" method="post">
    @csrf
    <div class="input_add">
    <h4>Nama Penyakit :</h4>
    <textarea type="text" name="penyakit" placeholder="Masukkan nama penyakit" required></textarea> 
    </div>
    <div class="input_add">
        <h4>Gejala :</h4>
    <textarea type="text" name="gejala" placeholder="Berikan penjelesan mengenai gejala dari penyakit"></textarea> 
    </div>
    <div class="input_add">
        <h4>Terapi :</h4>
    <textarea type="text" name="terapi" placeholder="Apa yang dapat dilakukan untuk dapat menyembuhkan atau meminimalkan dampak dari penyakit"></textarea>
    </div>
    <br><br>
    <input type="submit" value="Simpan">
</form>
</div>
</body>
</html>