<?php
include 'konek.php';

$id= $_GET['id'];
mysqli_query($konek, "delete from informasipenumpang where ID='$id'");

header("location:informasi_penumpang.php");
?>