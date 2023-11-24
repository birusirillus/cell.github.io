<h3>Edit Table Informasi Tujuan</h3>

<?php
include 'konek.php';
$ID= $_GET['id'];
$data = mysqli_query($konek,"SELECT * FROM informasitujuan WHERE ID='$ID'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-informasitujuan.php">
<table>
    <tr>
        <td>ID</td>
        <td><input type="number" name="ID" value="<?php echo $tampil['ID']; ?>"></td>
    </tr>
    <tr>
        <td>Maskapai</td>
        <td><input type="text" name="Maskapai" value="<?php echo $tampil['Maskapai']; ?>"></td>
    </tr>
    <tr>
        <td>Asal</td>
        <td><input type="text" name="Asal" value="<?php echo $tampil['Asal']; ?>"></td>
    </tr>
    <tr>
        <td>Tujuan</td>
        <td><input type="text" name="Tujuan" value="<?php echo $tampil['Tujuan']; ?>"></td>
    </tr>
    <tr>
        <td>KodeBandara</td>
        <td><input type="number" name="KodeBandara" value="<?php echo $tampil['KodeBandara']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>