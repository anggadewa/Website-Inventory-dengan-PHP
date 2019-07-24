<?php 
$id_barangkeluar = $_GET['id'];
$ambildata = $koneksi->query("DELETE FROM barang_keluar WHERE id_barangkeluar = '$id_barangkeluar'");
 ?>
 <script>alert('Barang Berhasil Dihapus');</script>
 <script>location='index.php?halaman=stockkeluar';</script>