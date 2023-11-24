<?php
include 'konek.php';

$ID = $_POST['ID'];
$NomorPenerbangan = $_POST['NomorPenerbangan'];
$TanggalPenerbangan = $_POST['TanggalPenerbangan'];
$WaktuPenerbangan = $_POST['WaktuPenerbangan'];


mysqli_query($konek,"UPDATE informasipenerbangan SET ID='$ID', NomorPenerbangan='$NomorPenerbangan',
TanggalPenerbangan='$TanggalPenerbangan',WaktuPenerbangan='$WaktuPenerbangan' WHERE ID='$ID'");
header("location: informasi_penerbangan.php"); 

?>