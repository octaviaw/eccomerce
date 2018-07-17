<!DOCTYPE html>
<html>
<head>
	<title>Barang</title>
</head>
<body>
<h1>CRUD Barang</h1>
@csrf
<a href="{{route('barang.insert')}}">Tambah</a>
<table>

<tr>
		<td>Nama Barang</td>
		<td>Jenis Barang</td>
		<td>Harga Barang</td>
		<td>Satuan</td>
		<td>Aksi</td>

	</tr>
@foreach($databarang as $data)	<tr>
		
		<td>{{$data->nama_barang}}</td>
		<td>{{$data->jenis_barang}}</td>
		<td>{{$data->harga_barang}}</td>
		<td>{{$data->satuan}}</td>
		<td><a href="{{route('barang.edit',$data->id)}}">Edit</a>
			<form action="{{route('barang.delete',$data->id)}}" method="POST">
				@csrf
				<input type="text" name="_method" value="DELETE" hidden>
				<BUTTON type="submit" VALUE="Delete">Delete</BUTTON>

			</form>

			</td>

	</tr>
@endforeach
</table>
</body>
</html>