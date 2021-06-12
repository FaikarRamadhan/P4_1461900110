<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah Data</title>
</head>
<body>
  <form action="{{route('buku0110.store')}}" method="post">
    @csrf
    id : <input type="text" name="id">
    judul: <input type="text" name="judul">
    tahun_terbit : <input type="text" name="tahun_terbit">
    <button type="submit">Simpan</button>
  </form>  
</body>
</html>