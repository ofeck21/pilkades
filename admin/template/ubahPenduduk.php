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
					<h3>Ubah Data Penduduk</h3>
				</div>
				<div class="card-body">
					<div class="form-validation">
                        <form class="form-valide" action="" method="post">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-nik">NIK <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-nik" name="val-nik" value="<?php echo $row['nik'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-hp">No HP <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-hp" name="val-hp" value="<?php echo $row['hp'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-nama">Nama Lengkap <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-nama" name="val-nama" value="<?php echo $row['nama'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-tmp">Tempat Lahir <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-tmp" name="val-tmp" value="<?php echo $row['tmp_lhr'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-tgl">Tanggal Lahir <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" id="val-tgl" name="val-tgl" value="<?php echo $row['tgl_lhr'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-gendre">Jenis Kelamin <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="val-gendre" name="val-gendre">
                                        <option value="<?php echo $row['gendre'] ?>"> -- <?php echo $row['gendre'] ?> -- </option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-alamat">Alamat <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" id="val-alamat" name="val-alamat" rows="5" placeholder="Masukan Alamat"><?php echo $row['alamat'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-agama">Agama <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-agama" name="val-agama" value="<?php echo $row['agama'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-status">Status <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="val-status" name="val-status">
                                        <option value="<?php echo $row['status'] ?>"> -- <?php echo $row['status'] ?> --</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belu Kawin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-pekerjaan">Pekerjaan <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-pekerjaan" name="val-pekerjaan" value="<?php echo $row['pekerjaan'] ?>">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $row['id_penduduk']; ?>">
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" name="ubahPenduduk" class="btn btn-info ">Simpan</button>
                                    <a href="?penduduk" class="btn btn-success  pull-right">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>