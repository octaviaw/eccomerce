<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    //
public function index(){
$databarang=Barang::all();
return view('barang.index',compact('databarang'));

}
public function insert(){
return view('barang.insert');

}
public function simpan(Request $ambil){
$data= new Barang;
$nama_barang=$ambil->nama_barang;
$harga_barang=$ambil->harga_barang;
$satuan=$ambil->satuan;
$jenis_barang=$ambil->jenis_barang;
$data['nama_barang']=$nama_barang;
$data['jenis_barang']=$jenis_barang;
$data['harga_barang']=$harga_barang;
$data['satuan']=$satuan;
$data->save();
return redirect('barang');
}
public function edit($id){
$data=Barang::find($id);
return view('barang.edit',compact('data','$id'));

}
public function update(Request $ambil, $id){
$data=Barang::find($id);
//dd($data);
   $data->update($ambil->all());
//$data->update();
return redirect('barang');
}
public function delete(Request $ambil, $id){
$data=Barang::find($id)->delete();

return redirect('barang');


}

}
