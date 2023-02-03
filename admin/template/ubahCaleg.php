<?php  
$q = $_GET['q'];
$uC = mysqli_query($con, "SELECT * FROM caleg WHERE id_caleg=$q");
$row = mysqli_fetch_assoc($uC);
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-title">
				<h3>Ubah Data Caleg</h3>
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
							<input type="text" name="nama" class="form-control" value="<?php echo($row['nama_caleg']) ?>" required="">
						</div>
						<div class="form-group">
							<label for="nama">Nomor Urut</label>
							<input type="text" name="nomor" value="<?php echo($row['no_urut']) ?>"  class="form-control" required="">
						</div>
						<div class="form-group">
							<label for="nama">Moto</label>
							<input type="text" name="moto" value="<?php echo($row['moto']) ?>" class="form-control">
						</div>
						<input type="hidden" name="id" value="<?php echo($row['id_caleg']) ?>">
						<input type="submit" name="ubahCaleg" value="Simpan" class="btn btn-success">
						<a href="?caleg" class="btn btn-primary pull-right">Batal</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>