<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Barang Masuk</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<a href="index.php?halaman=stock" class="btn btn-primary"><i class="fa fa-table"></i>&nbsp; Tabel Barang Masuk</a>
			</div>
		</div>
	</div>
</div>
<br><br>
<h2 style="text-align: center">Halaman Barang Masuk</h2>
<br><br>
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 offset-md-3">
		<div class="card">
			<div class="card-header">
				<center><strong>INPUT BARANG MASUK</strong></center>
			</div>
			<div class="card-body card-block">
				<form method="post">
					<div class="form-group">
						<label class=" form-control-label">Nomor Transaksi</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
							<input class="form-control" type="text" name="transaksi" placeholder="Nomor Transaksi" required>
						</div>
					</div>
				<!-- <div class="form-group">
					<label class=" form-control-label">Tanggal Transaksi</label>
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
						<input class="form-control" type="date" name="tanggal">
					</div>
				</div> -->
				<div class="form-group">
					<label class=" form-control-label">Nama Supplier</label>
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-building-o"></i></div>
						<select class="form-control" name="supplier" required>
							<option disabled selected>Pilih Supplier</option>
							<option value="XIAOMI">Xiaomi</option>
							<option value="SAMSUNG">Samsung</option>
							<option value="OPPO">Oppo</option>
							<option value="VIVO">Vivo</option>
							<option value="APPLE">Apple</option>
							<option value="HUAWEI">Huawei</option>
							<option value="NOKIA">Nokia</option>
							<option value="ASUS">Asus</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class=" form-control-label">Nama Barang</label>
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-cloud-download"></i></div>
						<input class="form-control" type="text" name="barang" placeholder="Nama Barang" required>
					</div>
				</div>
				<div class="form-group">
					<label class=" form-control-label">Kode Produk</label>
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-plus-square"></i></div>
						<input class="form-control" type="text" name="kodeproduk" placeholder="Kode Produk" required>
					</div>
				</div>
				<div class="form-group">
					<label class=" form-control-label">Kuantitas</label>
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-money"></i></div>
						<input class="form-control" type="number" min="1" name="stock" required>
					</div>
				</div>
				<div class="form-group">
					<label class=" form-control-label">Harga Barang (Rp)</label>
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-shopping-cart"></i></div>
						<input class="form-control" type="number" name="harga" required>
					</div>
				</div>
				<button class="btn btn-primary" name="submit" style="border-radius: 10px;">INPUT</button>
				<button class="btn btn-danger" name="reset" style="border-radius: 10px;">RESET</button>
			</form>
			<?php 
			if(isset($_POST['submit'])){
				$notransaksi = $_POST['transaksi'];
				$namasupplier = $_POST['supplier'];
				$namabarang = $_POST['barang'];
				$kodeproduk = $_POST['kodeproduk'];
				$kuantitas = $_POST['stock'];
				$harga = $_POST['harga'];
				$tanggal = date("Y-m-d");

				$ambildata = $koneksi->query("SELECT * FROM barang WHERE no_transaksi = '$notransaksi'");
				$ambil = $ambildata->num_rows;
				if($ambil == 1){
					echo "<script>alert('Nomor Transaksi Sudah Terdaftar');</script>";
					echo "<script>location='index.php?halaman=masuk';</script>";
				} else{
					$koneksi->query("INSERT INTO barang (no_transaksi, tgl_transaksi, nama_supplier, kode_barang, nama_barang, stock_barang, harga_barang) VALUES ('$notransaksi','$tanggal', '$namasupplier', '$kodeproduk', '$namabarang', '$kuantitas', '$harga')");

					echo "<script>alert('Produk Berhasil Diinput');</script>";
					echo "<script>location='index.php?halaman=stock';</script>";
				}
			}

			?>
		</div>
	</div>
</div>
</div>