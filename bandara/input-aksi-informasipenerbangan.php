<?php
include 'konek.php';
$ID= $_POST['ID'];
$NomorPenerbangan = $_POST['NomorPenerbangan'];
$TanggalPenerbangan = $_POST['TanggalPenerbangan'];
$WaktuPenerbangan = $_POST['WaktuPenerbangan'];

mysqli_query($konek, "INSERT INTO informasipenerbangan values ('$ID', '$NomorPenerbangan', '$TanggalPenerbangan', '$WaktuPenerbangan')");
header("location:informasi_penerbangan.php");
?>