<h3>Edit Table Informasi Penerbangan</h3>

<?php
include 'konek.php';
$ID= $_GET['id'];
$data = mysqli_query($konek,"SELECT * FROM informasipenerbangan WHERE ID='$ID'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-informasipenerbangan.php">
<table>
    <tr>
        <td>ID</td>
        <td><input type="number" name="ID" value="<?php echo $tampil['ID']; ?>"></td>
    </tr>
    <tr>
        <td>Kode Bandara</td>
        <td><input type="number" name="NomorPenerbangan" value="<?php echo $tampil['NomorPenerbangan']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Bandara</td>
        <td><input type="date" name="TanggalPenerbangan" value="<?php echo $tampil['TanggalPenerbangan']; ?>"></td>
    </tr>
    <tr>
        <td>Kota</td>
        <td><input type="time" name="WaktuPenerbangan" value="<?php echo $tampil['WaktuPenerbangan']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>