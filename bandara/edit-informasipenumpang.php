<h3>Edit Table Informasi Penumpang</h3>

<?php
include 'konek.php';
$ID= $_GET['id'];
$data = mysqli_query($konek,"SELECT * FROM informasipenumpang WHERE ID='$ID'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-informasipenumpang.php">
<table>
    <tr>
        <td>ID</td>
        <td><input type="number" name="ID" value="<?php echo $tampil['ID']; ?>"></td>
    </tr>
    <tr>
        <td>NamaPenumpang</td>
        <td><input type="text" name="NamaPenumpang" value="<?php echo $tampil['NamaPenumpang']; ?>"></td>
    </tr>
    <tr>
        <td>JenisKelamin</td>
        <td><input type="text" name="JenisKelamin" value="<?php echo $tampil['JenisKelamin']; ?>"></td>
    </tr>
    <tr>
        <td>NomorPenerbangan</td>
        <td><input type="number" name="NomorPenerbangan" value="<?php echo $tampil['NomorPenerbangan']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>