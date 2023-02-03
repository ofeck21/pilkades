<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-title">
					<h3>Tambah Data Penduduk</h3>
				</div>
				<div class="card-body">
					<div class="form-validation">
                        <form class="form-valide" action="" method="post">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-nik">NIK <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-nik" name="val-nik" placeholder="Nomor Induk Keluarga">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-hp">No HP <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-hp" name="val-hp" placeholder="Nomor Telepon">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-nama">Nama Lengkap <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-nama" name="val-nama" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-tmp">Tempat Lahir <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-tmp" name="val-tmp" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-tgl">Tanggal Lahir <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" id="val-tgl" name="val-tgl" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-gendre">Jenis Kelamin <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="val-gendre" name="val-gendre">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-alamat">Alamat <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" id="val-alamat" name="val-alamat" rows="5" placeholder="Masukan Alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-agama">Agama <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-agama" name="val-agama" placeholder="Agama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-status">Status <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="val-status" name="val-status">
                                        <option value="">Pilih Status</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belu Kawin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-pekerjaan">Pekerjaan <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-pekerjaan" name="val-pekerjaan" placeholder="Pekrjaan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" name="tambahPenduduk" class="btn btn-info ">Tambah </button>
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