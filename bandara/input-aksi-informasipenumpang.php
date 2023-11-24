<?php
include 'konek.php';
$ID= $_POST['ID'];
$NamaPenumpang = $_POST['NamaPenumpang'];
$JenisKelamin = $_POST['JenisKelamin'];
$NomorPenerbangan = $_POST['NomorPenerbangan'];

mysqli_query($konek, "INSERT INTO informasipenumpang values ('$ID', '$NamaPenumpang', '$JenisKelamin', '$NomorPenerbangan')");
header("location:informasi_penumpang.php");
?>