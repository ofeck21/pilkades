<?php 
require_once 'config.php';

//mengecek pesan masuk
$cek = mysqli_query($con, "SELECT * FROM inbox WHERE Processed='false'");

//membaca data pesan
while ($data = mysqli_fetch_array($cek))
{
  // membaca ID SMS
  $id = $data['ID'];

  // membaca no pengirim
  $noPengirim = $data['SenderNumber'];

  // membaca pesan SMS dan mengubahnya menjadi kapital
  $msg = strtoupper($data['TextDecoded']);

  // proses parsing 

  // memecah pesan berdasarkan karakter <spasi>
  $pecah = explode(" ", $msg);

	//mengecek apakah nomor terdaftar di data penduduk
$pd = mysqli_query($con, "SELECT * FROM penduduk WHERE hp='$noPengirim'");
$rpd = mysqli_fetch_array($pd);

if (mysqli_num_rows($pd)>0 ) {
	// Menengecek kata pertama dari SMS
	  if ($pecah[0] == 'CEK') {
	  	$nama = $rpd['nama'];
	  	$nik = $rpd['nik'];
		$reply = "Nomor Anda Sudah Terdaftar Dengan Identitas Sebagai Berikut :
Nama : $nama
NIK : $nik";
	  }else if ($pecah[0] == 'HELP') {
	  	$nama = $rpd['nama'];
		$reply = "Hai, $nama !
Ketik :
CEK = Untuk Mengecek,
HELP = Untuk Petunjuk,
PILIH<spasi>No Urut (Contoh : PILIH 1) = Untuk Memilih";
	  }else if ($pecah[0] == 'PILIH') {
	  	$pilih = $pecah[1];
	  	$idpd = $rpd['id_penduduk'];
	  	$nama = $rpd['nama'];
	  	$nik = $rpd['nik'];
	  	$caleg = mysqli_query($con, "SELECT * FROM caleg WHERE no_urut=$pilih");
	  	if (mysqli_num_rows($caleg)>0) {
	  		$rc = mysqli_fetch_array($caleg);
	  		$idc = $rc['id_caleg'];

	  		$cekvote = mysqli_query($con, "SELECT * FROM vote WHERE id_penduduk=$idpd");
	  		$rv = mysqli_fetch_array($cekvote);
	  		if (mysqli_num_rows($cekvote)>0) {
	  			$nou = $rv['no_urut'];
	  			$reply = "Maaf, Anda Sudah Memilih No Urut $nou, Anda Tidak Dibolehkan Memilih Lebih Dari 1x.";
	  		}else{
	  		$vote = mysqli_query($con, "INSERT INTO vote (id_penduduk, id_caleg, no_urut) VALUES ($idpd, $idc, $pilih)");
	  		$upd = mysqli_query($con, "UPDATE penduduk SET vote=1 WHERE id_penduduk=$idpd");
	  		if ($vote) {
	  			$reply = "Anda Telah Berhasil Memilih!
Nama : $nama
NIK : $nik
Memilih : No Urut $pilih";
	  		}else{
	  			$reply = "Vote Gagal !";
	  		}
	  	}
	  		
	  	}else{
	  		$reply = "Maaf, Tidak Ada CALON dengan No Urut $pilih";
	  	}
		
	  } else{ 
	  	$reply = "Maaf perintah salah";
	}
}else{
	$reply = "Maaf, Nomor Anda Belum Terdaftar!";
}

  // membuat SMS balasan

  $query3 = "INSERT INTO outbox(DestinationNumber, TextDecoded, CreatorID) VALUES ('$noPengirim', '$reply', 'Pilkades')";
  $hasil3 = mysqli_query($con, $query3);

  // ubah nilai 'processed' menjadi 'true' untuk setiap SMS yang telah diproses

  $query3 = "UPDATE inbox SET Processed = 'true' WHERE ID = '$id'";
  $hasil3 = mysqli_query($con, $query3);
}
?>