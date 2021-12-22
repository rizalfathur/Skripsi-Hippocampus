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
    @foreach($users as $u)
           <input type="text" style="display:none;"name="id" value="{{ $u->id}}">
           <input type="text" name="nama" value="{{ $u->name }}" style="width:300px"><br>
           <input type="text" name="email" value="{{ $u->email }}" style="width:400px"><br>
           <input type="text" name="no_hp" value="{{ $u->no_hp }}">
           <input type="text"  name="universitas" value="{{ $u->universitas}}">
        <input onclick="return confirm('Apakah kamu yakin?')" type="submit" value="Simpan">
    @endforeach
    </form>
</body>
</html>