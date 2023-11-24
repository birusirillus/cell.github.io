<?php
include 'konek.php';

$id= $_GET['id'];
mysqli_query($konek, "delete from informasipenerbangan where ID='$id'");

header("location:informasi_penerbangan.php");
?>