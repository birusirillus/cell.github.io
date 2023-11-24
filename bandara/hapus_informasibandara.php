<?php
include 'konek.php';

$id= $_GET['id'];
mysqli_query($konek, "delete from informasibandara where ID='$id'");

header("location:informasi_bandara.php");
?>