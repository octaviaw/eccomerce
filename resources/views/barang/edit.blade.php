<!DOCTYPE html>
<html>
<head>
	<title>Tambah Barang
</title>
</head>
<body>

<h1>Update Barang</h1>
<form action="{{action('BarangController@update', $data->id)}}" method="POST">
	@csrf
	<input name="_method" type="hidden" value="PUT">
	<label>Nama</label><input type="text" name="nama_barang" value="  {{$data->nama_barang}}"><br>
	<label>Jenis</label><input type="text" name="jenis_barang" value="  {{$data->jenis_barang}}"><br>
	<label>Satuan</label><input type="text" name="satuan" value="  {{$data->satuan}}"><br>
	<label>Harga</label><input type="text" name="harga_barang" value="  {{$data->harga_barang}}"><br>
	<input type="submit" value="submit">
</form>
</body>
</html>