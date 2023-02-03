<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-title">
				<h3>Tambah Data Caleg</h3>
				<hr>
			</div>
			<div class="card-body">
				<div class="form-validation">
					<form method="POST" action="" enctype="multipart/form-data">
						<div class="form-group">
							<label for="foto">Foto Caleg :</label><br>
							<input type="file" name="foto" id="foto">
						</div>
						<div class="form-group">
							<label for="nama">Nama Caleg</label>
							<input type="text" name="nama" placeholder="Nama Caleg" class="form-control" required="">
						</div>
						<div class="form-group">
							<label for="nama">Nomor Urut</label>
							<input type="text" name="nomor" placeholder="Nomor Urut Caleg" class="form-control" required="">
						</div>
						<div class="form-group">
							<label for="nama">Moto</label>
							<input type="text" name="moto" placeholder="Moto / Slogan" class="form-control">
						</div>
						<input type="submit" name="tambahCaleg" value="Tambah" class="btn btn-success">
						<a href="?caleg" class="btn btn-primary pull-right">Batal</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>