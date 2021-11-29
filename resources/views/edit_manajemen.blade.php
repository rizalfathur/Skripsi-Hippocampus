<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pengguna</title>
</head>
<body>
    <form action="ubah" method="post">
    @csrf
    @foreach($pengguna as $p)
           <input type="text" style="display:none;"name="id" value="{{ $p->id_pengguna}}">
           <input type="text" name="nama" value="{{ $p->nama }}" style="width:300px"><br>
           <input type="text" name="email" value="{{ $p->email }}" style="width:400px"><br>
           <input type="text" name="no_hp" value="{{ $p->no_hp }}">
           <input type="text"  name="universitas" value="{{ $p->universitas}}">
        <input onclick="return confirm('Apakah kamu yakin?')" type="submit" value="Simpan">
    @endforeach
    </form>
</body>
</html>