<h2>BARANG KELUAR</h2>
<div class="row">
	<div class="col-lg-12">
		<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nomor Transaksi Keluar</th>
					<th>Nomor Transaksi Masuk</th>
					<th>Tanggal Transaksi</th>
					<th>Kode Barang</th>
					<th>Nama Barang</th>
					<th>Jumlah Barang</th>
					<th>Harga Barang</th>
					<th>Total Harga Barang</th>
					<th>Pengaturan</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
				$ambildata = $koneksi->query("SELECT * FROM barang_keluar ORDER BY `tgl_transaksi` DESC");
				while($ambil = $ambildata->fetch_assoc()){
				 ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $ambil['no_transaksikeluar']; ?></td>
					<td><?= $ambil['no_transaksimasuk']; ?></td>
					<td><?= $ambil['tgl_transaksi']; ?></td>
					<td><?= $ambil['kode_barang']; ?></td>
					<td><?= $ambil['nama_barang']; ?></td>
					<td><?= $ambil['jumlah_barang']; ?></td>
					<td><?= $ambil['harga_barang']; ?></td>
					<td><?= $ambil['total_harga_barang']; ?></td>
					<td><a href="index.php?halaman=hapusstockkeluar&id=<?= $ambil['id_barangkeluar'] ?>" class="btn btn-danger btn-sm">HAPUS</a></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div><br><br><br>