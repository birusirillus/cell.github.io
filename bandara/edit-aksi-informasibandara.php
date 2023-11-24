<?php
include 'konek.php';

$ID = $_POST['ID'];
$KodeBandara = $_POST['KodeBandara'];
$NamaBandara = $_POST['NamaBandara'];
$Kota = $_POST['Kota'];
$Negara = $_POST['Negara'];
$KodePos = $_POST['KodePos'];
$KapasitasTerminal = $_POST['KapasitasTerminal'];
$KapasitasLandasanTerbang = $_POST['KapasitasLandasanTerbang'];



mysqli_query($konek,"UPDATE informasibandara SET ID='$ID', KodeBandara='$KodeBandara',
NamaBandara='$NamaBandara',Kota='$Kota',Negara='$Negara',KodePos='$KodePos',KapasitasTerminal='$KapasitasTerminal',KapasitasLandasanTerbang='$KapasitasLandasanTerbang' WHERE ID='$ID'");
header("location: informasi_bandara.php");

?>