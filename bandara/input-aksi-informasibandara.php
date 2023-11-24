<?php
include 'konek.php';
$ID= $_POST['ID'];
$KodeBandara = $_POST['KodeBandara'];
$NamaBandara = $_POST['NamaBandara'];
$Kota = $_POST['Kota'];
$Negara = $_POST['Negara'];
$KodePos = $_POST['KodePos'];
$KapasitasTerminal = $_POST['KapasitasTerminal'];
$KapasitasLandasanTerbang = $_POST['KapasitasLandasanTerbang'];

mysqli_query($konek, "INSERT INTO informasibandara values ('$ID', '$KodeBandara', '$NamaBandara', '$Kota', '$Negara', '$KodePos', '$KapasitasTerminal', '$KapasitasLandasanTerbang')");
header("location:informasi_bandara.php");
?>