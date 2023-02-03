<?php  
$q = $_GET['q'];
$uQ = mysqli_query($con, "SELECT * FROM penduduk WHERE id_penduduk=$q");
$row = mysqli_fetch_assoc($uQ);
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-title">
					<h3>Detail Data Penduduk</h3>
				</div>
				<div class="card-body">
					<div class="form-validation">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-nik">NIK <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-nik" name="val-nik" value="<?php echo $row['nik'] ?>" disabled="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-hp">No HP <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-hp" name="val-hp" value="<?php echo $row['hp'] ?>" disabled="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-nama">Nama Lengkap <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-nama" name="val-nama" value="<?php echo $row['nama'] ?>" disabled="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-tmp">Tempat Lahir <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-tmp" name="val-tmp" value="<?php echo $row['tmp_lhr'] ?>" disabled="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-tgl">Tanggal Lahir <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" id="val-tgl" name="val-tgl" value="<?php echo $row['tgl_lhr'] ?>" disabled="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-gendre">Jenis Kelamin <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="val-gendre" name="val-gendre" disabled="">
                                        <option value="<?php echo $row['gendre'] ?>"> -- <?php echo $row['gendre'] ?> -- </option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-alamat">Alamat <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" id="val-alamat" name="val-alamat" rows="5" placeholder="Masukan Alamat" disabled=""><?php echo $row['alamat'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-agama">Agama <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-agama" name="val-agama" value="<?php echo $row['agama'] ?>" disabled="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-status">Status <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="val-status" name="val-status" disabled="">
                                        <option value="<?php echo $row['status'] ?>"> -- <?php echo $row['status'] ?> --</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belu Kawin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-pekerjaan">Pekerjaan <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-pekerjaan" name="val-pekerjaan" value="<?php echo $row['pekerjaan'] ?>" disabled="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <a href="?penduduk=edit&q=<?php echo $row['id_penduduk'] ?>" class="btn btn-primary">Ubah</a>
                                    <a href="?penduduk" class="btn btn-success  pull-right">Kembali</a>
                                </div>
                            </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>