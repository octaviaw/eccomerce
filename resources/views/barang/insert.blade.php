<!DOCTYPE html>
<html>
<head>
	<title>Tambah Barang
</title>
</head>
<body>

<h1>Insert Barang</h1>
<form action="{{route('barang.simpan')}}" method="POST">
	@csrf
	<label>Nama</label><input type="text" name="nama_barang"><br>
	<label>Jenis</label><input type="text" name="jenis_barang"><br>
	<label>Satuan</label><input type="text" name="satuan"><br>
	<label>Harga</label><input type="text" name="harga_barang"><br>
	<input type="submit" value="submit">
</form>
</body>
</html>