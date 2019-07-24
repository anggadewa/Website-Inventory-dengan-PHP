<?php 
include 'db.php';
$no_transaksi = $_GET['no_transaksi'];
$ambildata = $koneksi->query("SELECT * FROM barang WHERE no_transaksi = '$no_transaksi'");
$ambil = $ambildata->fetch_array();
// echo $ambil['nama_barang'];
$data = array('no_transaksi' => $ambil['no_transaksi'],
			  'nama_barang' => $ambil['nama_barang'],
			  'kode_barang' => $ambil['kode_barang'],
			  'stock_barang' => $ambil['stock_barang'],
			  'harga_barang' => $ambil['harga_barang'] );
echo json_encode($data);
 ?>