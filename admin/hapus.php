<?php  
if (isset($_GET['penduduk']) AND $_GET['penduduk']='hapus') {
	$q= $_GET['q'];
	$qH = mysqli_query($con, "DELETE FROM penduduk WHERE id_penduduk=$q");

	if ($qH) {
		echo "<script>alert('Data Berhasil Dihapus!');
		location=(href='?penduduk');
		</script>";
	}else{
		echo "<script>alert('Data Gagal Dihapus!');
		location=(href='?penduduk');
		</script>";
	}
}elseif (isset($_GET['caleg']) AND $_GET['caleg']='hapus') {
	$q= $_GET['q'];
	mysqli_query($con, "DELETE FROM vote WHERE id_caleg=$q");
	$qH = mysqli_query($con, "DELETE FROM caleg WHERE id_caleg=$q");
	if ($qH) {
		echo "<script>alert('Data Berhasil Dihapus!');
		location=(href='?caleg');
		</script>";
	}else{
		echo "<script>alert('Data Gagal Dihapus!');
		location=(href='?caleg');
		</script>";
	}
}
?>