<?php 
if (isset($_POST['kirimpesan'])) {
	$tujuan = $_POST['tujuan'];
	$pesan = $_POST['pesan'];
	if ($tujuan !=0 || $pesan !=0) {
		$kirim = mysqli_query($con, "INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID) VALUES ('$tujuan','$pesan', 'Pilkades')");
		if ($kirim) {
			echo "<script>
				alert('Pesan Telah Dikirim !');
				location=(href='?buatpesan');
				</script>";
		}
	}else{
		echo "<script>
			alert('Harap Isi Dengan Lekap !');
			</script>";
	}
}
?>