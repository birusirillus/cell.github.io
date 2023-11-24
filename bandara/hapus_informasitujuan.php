<?php
include 'konek.php';

$id= $_GET['id'];
mysqli_query($konek, "delete from informasitujuan where ID='$id'");

header("location:informasi_tujuan.php");
?>