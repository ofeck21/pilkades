<?php  
if (isset($_POST['tambahPenduduk'])) {
	$nik = $_POST['val-nik'];
	$hp = $_POST['val-hp'];
	$nama = $_POST['val-nama'];
	$tmp_lhr = $_POST['val-tmp'];
	$tgl_lhr = $_POST['val-tgl'];
	$gendre = $_POST['val-gendre'];
	$alamat = $_POST['val-alamat'];
	$agama = $_POST['val-agama'];
	$status = $_POST['val-status'];
	$pkj = $_POST['val-pekerjaan'];
	
	$qT = mysqli_query($con, "INSERT INTO penduduk (id_penduduk, nik, nama, tmp_lhr, tgl_lhr, gendre, alamat, agama, status, pekerjaan, hp, vote) VALUES (null, '$nik', '$nama', '$tmp_lhr', '$tgl_lhr', '$gendre', '$alamat', '$agama', '$status', '$pkj', '$hp', 0)" );

	if ($qT) {
		echo "<script>alert('Data Berhasil Ditambahkan!');
		location=(href='?penduduk');
		</script>";
	}else{
		echo "<script>alert('Data Gagal Ditambahkan!');
		location=(href='?penduduk=tambah');
		</script>";
	}


}elseif (isset($_POST['tambahCaleg'])) {
	//mengambil data gambar
	$nama_file 	= $_FILES['foto']['name'];
	$tipe_file 	= $_FILES['foto']['type'];
	$tmp_file	= $_FILES['foto']['tmp_name'];
	$size_file	= $_FILES['foto']['size'];
	//folder tempat menyimpan gambar
	$dir = "images/caleg/".$nama_file;

	//mengambil data form
	$nama = $_POST['nama'];
	$nomor = $_POST['nomor'];
	$moto = $_POST['moto'];

	if ($tipe_file == "image/jpeg" || $tipe_file == "image/jpg" || $tipe_file == "image/png") {
		if (move_uploaded_file($tmp_file, $dir)) {
			$tC = mysqli_query($con, "INSERT INTO caleg (id_caleg, nama_caleg, no_urut, moto, foto) VALUES (null, '$nama', '$nomor', '$moto', '$nama_file')");
			if ($tC) {
			 	echo "<script>
				alert('Data Telah Ditambahkan !');
				location=(href='?caleg');
				</script>";
			 }else{
			 	echo "<script>
				alert('Data Gagal Disimpan !');
				location=(href='?caleg=tambah');
				</script>";
			 } 
		}else{
			echo "<script>
			alert('File Gagal Diupload !');
			location=(href='?caleg=tambah');
			</script>";
		}
	}else{
		echo "<script>
		alert('Tipe File Tidak Sesuai !');
		location=(href='?caleg=tambah');
		</script>";
	}

}
?>