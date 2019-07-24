<?php 
$id_barang = $_GET['id'];
$ambildata = $koneksi->query("DELETE FROM barang WHERE id_barang = '$id_barang'");
 ?>
 <script>alert('Barang Berhasil Dihapus');</script>
 <script>location='index.php?halaman=stock';</script>