<?php  
session_start();

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'pilkades');

$con = mysqli_connect(HOST, USER, PASS, DBNAME) or die("<center><h1>Ooops ! - Ada Masalah Dengan Konfigurasi Database!");

//select data penduduk
$penduduk = mysqli_query($con, "SELECT * FROM penduduk ORDER BY id_penduduk DESC");
$jml = mysqli_num_rows($penduduk);

//select data penduduk yang belum memilih
$belum = mysqli_query($con, "SELECT * FROM penduduk WHERE vote=0");
$blm = mysqli_num_rows($belum);

//select data penduduk yang sudah memilih
$memilih = mysqli_query($con, "SELECT * FROM penduduk WHERE vote=1");
$mml = mysqli_num_rows($memilih);

//select data caleg
$caleg = mysqli_query($con, "SELECT * FROM caleg");
$jmlcaleg = mysqli_num_rows($caleg);

?>