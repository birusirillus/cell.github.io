<?php
include 'konek.php';
$ID= $_POST['ID'];
$Maskapai = $_POST['Maskapai'];
$Asal = $_POST['Asal'];
$Tujuan = $_POST['Tujuan'];
$KodeBandara = $_POST['KodeBandara'];

mysqli_query($konek, "INSERT INTO informasitujuan values ('$ID', '$Maskapai', '$Asal', '$Tujuan', '$KodeBandara')");
header("location:informasi_tujuan.php");
?>