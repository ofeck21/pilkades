<?php 	
if (isset($_GET['pesanmasuk']) AND $_GET['pesanmasuk']='hapus') {
	$q= $_GET['q'];
	$qH = mysqli_query($con, "DELETE FROM inbox WHERE ID=$q");

	if ($qH) {
		echo "<script>alert('Pesan Telah Dihapus!');
		location=(href='?pesanmasuk');
		</script>";
	}else{
		echo "<script>alert('Pesan Gagal Dihapus!');
		location=(href='?pesanmasuk');
		</script>";
	}
}
elseif (isset($_GET['pesankeluar']) AND $_GET['pesankeluar']='hapus') {
	$q= $_GET['q'];
	$qH = mysqli_query($con, "DELETE FROM outbox WHERE ID=$q");

	if ($qH) {
		echo "<script>alert('Pesan Telah Dihapus!');
		location=(href='?pesankeluar');
		</script>";
	}else{
		echo "<script>alert('Pesan Gagal Dihapus!');
		location=(href='?pesankeluar');
		</script>";
	}
}
elseif (isset($_GET['pesanterkirim']) AND $_GET['pesanterkirim']='hapus') {
	$q= $_GET['q'];
	$qH = mysqli_query($con, "DELETE FROM sentitems WHERE ID=$q");

	if ($qH) {
		echo "<script>alert('Pesan Telah Dihapus!');
		location=(href='?pesanterkirim');
		</script>";
	}else{
		echo "<script>alert('Pesan Gagal Dihapus!');
		location=(href='?pesanterkirim');
		</script>";
	}
}
?>