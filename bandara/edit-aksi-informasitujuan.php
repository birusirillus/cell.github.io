<?php
include 'konek.php';

$ID = $_POST['ID'];
$Maskapai = $_POST['Maskapai'];
$Asal = $_POST['Asal'];
$Tujuan = $_POST['Tujuan'];
$KodeBandara = $_POST['KodeBandara'];


mysqli_query($konek,"UPDATE informasitujuan SET ID='$ID', Maskapai='$Maskapai',
Asal='$Asal',Tujuan='$Tujuan',KodeBandara='$KodeBandara' WHERE ID='$ID'");
header("location: informasi_tujuan.php"); 

?>