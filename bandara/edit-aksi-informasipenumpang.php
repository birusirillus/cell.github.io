<?php
include 'konek.php';

$ID = $_POST['ID'];
$NamaPenumpang = $_POST['NamaPenumpang'];
$JenisKelamin = $_POST['JenisKelamin'];
$NomorPenerbangan = $_POST['NomorPenerbangan'];


mysqli_query($konek,"UPDATE informasipenumpang SET ID='$ID', NamaPenumpang='$NamaPenumpang',
JenisKelamin='$JenisKelamin',NomorPenerbangan='$NomorPenerbangan' WHERE ID='$ID'");
header("location: informasi_penumpang.php"); 

?>