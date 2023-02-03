<?php  
if (isset($_POST['ubahPenduduk'])) {
	$q = $_POST['id'];
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

	$uP = mysqli_query($con, "UPDATE penduduk SET nik='$nik', nama='$nama', tmp_lhr='$tmp_lhr', tgl_lhr='$tgl_lhr', gendre='$gendre', alamat='$alamat', agama='$agama', status='$status', pekerjaan='$pkj', hp='$hp' WHERE id_penduduk=$q ");

	if ($uP) {
		echo "<script>alert('Data Berhasil Diubah!');
		location=(href='?penduduk=detail&q=".$q."');
		</script>";
	}else{
		echo "<script>alert('Data Gagal Diubah!');
		location=(href='?penduduk=edit&q=".$q."');
		</script>";
	}
}elseif (isset($_POST['ubahCaleg'])) {
	$q = $_POST['id'];
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

	if ($nama_file=='') {
		$uDC = mysqli_query($con, "UPDATE caleg SET nama_caleg='$nama', no_urut='$nomor', moto='$moto' WHERE id_caleg=$q");
		if ($uDC) {
			echo "<script>alert('Data Berhasil Diubah!');
			location=(href='?caleg');
			</script>";
		}else{
			echo "<script>alert('Data Gagal Diubah!');
			location=(href='?caleg=ubah&q=".$q."');
			</script>";
		}
	}else{
		if ($tipe_file == "image/jpeg" || $tipe_file == "image/jpg" || $tipe_file == "image/png") {
			if (move_uploaded_file($tmp_file, $dir)) {
				$uDC = mysqli_query($con, "UPDATE caleg SET nama_caleg='$nama', no_urut='$nomor', moto='$moto', foto='$nama_file' WHERE id_caleg=$q");
				if ($uDC) {
					echo "<script>alert('Data Berhasil Diubah!');
					location=(href='?caleg');
					</script>";
				}else{
					echo "<script>alert('Data Gagal Diubah!');
					location=(href='?caleg=ubah&q=".$q."');
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
}
?>