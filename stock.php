<h2>STOCK BARANG</h2>
<div class="row">
	<div class="col-lg-12">
		<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nomor Transaksi</th>
					<th>Tanggal Transaksi</th>
					<th>Nama Supplier</th>
					<th>Kode Barang</th>
					<th>Nama Barang</th>
					<th>Stock Barang</th>
					<th>Harga Barang</th>
					<th>Pengaturan</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
				$ambildata = $koneksi->query("SELECT * FROM barang ORDER BY `no_transaksi` DESC");
				while($ambil = $ambildata->fetch_assoc()){
				 ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $ambil['no_transaksi']; ?></td>
					<td><?= $ambil['tgl_transaksi']; ?></td>
					<td><?= $ambil['nama_supplier']; ?></td>
					<td><?= $ambil['kode_barang']; ?></td>
					<td><?= $ambil['nama_barang']; ?></td>
					<td><?= $ambil['stock_barang']; ?></td>
					<td><?= $ambil['harga_barang']; ?></td>
					<td><a href="index.php?halaman=hapusstock&id=<?= $ambil['id_barang'] ?>" class="btn btn-danger btn-sm">HAPUS</a></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div><br><br><br>