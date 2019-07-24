<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Barang Keluar</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<a href="index.php?halaman=stockkeluar" class="btn btn-primary"><i class="fa fa-table"></i>&nbsp; Tabel Barang Keluar</a>
			</div>
		</div>
	</div>
</div>
<br><br>
<h2 style="text-align: center">Halaman Barang Keluar</h2>
<br><br>
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 offset-md-3">
		<div class="card">
			<div class="card-header">
				<center><strong>INPUT BARANG KELUAR</strong></center>
			</div>
			<div class="card-body card-block">
				<form method="post">
					<div class="form-group">
						<label class=" form-control-label">Nomor Transaksi Masuk</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
							<select class="form-control" name="transaksimasuk" id="no_transaksi" required="on" onblur="isi()">
								<option disabled selected>Pilih Nomor Transaksi Masuk</option>
								<?php 
								$ambildata = $koneksi->query("SELECT * FROM barang");
								while($ambil = $ambildata->fetch_assoc()){;
									?>
									<option value="<?= $ambil['no_transaksi'] ?>"><?= $ambil['no_transaksi'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Nomor Transaksi Keluar</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
							<input class="form-control" type="text" name="transaksikeluar" placeholder="Nomor Transaksi Keluar" required>
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Nama Barang</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-cloud-download"></i></div>
							<input class="form-control" type="text" name="barang" placeholder="Nama Barang" id="nama_barang" required>
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Kode Produk</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-plus-square"></i></div>
							<input class="form-control" type="text" name="kodeproduk" placeholder="Kode Produk" id="kode_barang" required>
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Stock Barang</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-money"></i></div>
							<input type="number" name="" id="stock_barang" readonly class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Kuantitas</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-money"></i></div>
							<input class="form-control" type="number" min="1" name="stock" required>
						</div>
						<small class="form-text text-muted alert alert-danger">Min Barang Keluar 1</small>
						<small class="form-text text-muted alert alert-danger">Max Barang Keluar Sama Dengan Stock</small>
					</div>
					<div class="form-group">
						<label class=" form-control-label">Harga Barang (Rp)</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-shopping-cart"></i></div>
							<input class="form-control" type="number" name="harga" id="harga_barang" required>
						</div>
					</div>
					<button class="btn btn-primary" name="submit" style="border-radius: 10px;">INPUT</button>
					<button class="btn btn-danger" name="reset" style="border-radius: 10px;">RESET</button>
				</form>
				<?php 
				if(isset($_POST['submit'])){
					$transaksimasuk = $_POST['transaksimasuk'];
					$transaksikeluar = $_POST['transaksikeluar'];
					$namabarang = $_POST['barang'];
					$kodebarang = $_POST['kodeproduk'];
					$stock = $_POST['stock'];
					$hargabarang = $_POST['harga'];
					$tanggal = date("Y-m-d");
					$totalharga = $hargabarang * $stock;

					$ambildata = $koneksi->query("SELECT * FROM barang_keluar WHERE no_transaksikeluar = '$transaksikeluar'");
					$ambil = $ambildata->num_rows;
					if($ambil == 1){
						echo "<script>alert('Nomor Transaksi Sudah Terdaftar');</script>";
						echo "<script>location='index.php?halaman=keluar';</script>";
					} else{
						$koneksi->query("INSERT INTO barang_keluar (no_transaksikeluar, no_transaksimasuk, tgl_transaksi, kode_barang, nama_barang, jumlah_barang, harga_barang, total_harga_barang) VALUES ('$transaksikeluar','$transaksimasuk', '$tanggal', '$kodebarang', '$namabarang', '$stock', '$hargabarang', '$totalharga')");
						$koneksi->query("UPDATE barang SET stock_barang = stock_barang - $stock WHERE no_transaksi = '$transaksimasuk'");

						echo "<script>alert('Produk Berhasil Diinput');</script>";
						echo "<script>location='index.php?halaman=stockkeluar';</script>";
					}
				}

				?>
			</div>
		</div>
	</div>
</div>