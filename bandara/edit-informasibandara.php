<h3>Edit Table Informasi Bandara</h3>

<?php
include 'konek.php';
$ID= $_GET['id'];
$data = mysqli_query($konek,"SELECT * FROM informasibandara WHERE ID='$ID'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-informasibandara.php">
<table>
    <tr>
        <td>ID</td>
        <td><input type="number" name="ID" value="<?php echo $tampil['ID']; ?>"></td>
    </tr>
    <tr>
        <td>Kode Bandara</td>
        <td><input type="number" name="KodeBandara" value="<?php echo $tampil['KodeBandara']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Bandara</td>
        <td><input type="text" name="NamaBandara" value="<?php echo $tampil['NamaBandara']; ?>"></td>
    </tr>
    <tr>
        <td>Kota</td>
        <td><input type="text" name="Kota" value="<?php echo $tampil['Kota']; ?>"></td>
    </tr>
    <tr>
        <td>Negara</td>
        <td><input type="text" name="Negara" value="<?php echo $tampil['Negara']; ?>"></td>
    </tr>
    <tr>
        <td>Kode Pos</td>
        <td><input type="number" name="KodePos" value="<?php echo $tampil['KodePos']; ?>"></td>
    </tr>
    <tr>
        <td>Kapasitas Terminal</td>
        <td><input type="number" name="KapasitasTerminal" value="<?php echo $tampil['KapasitasTerminal']; ?>"></td>
    </tr>
    <tr>
        <td>Kapasitas Landasan Terbang</td>
        <td><input type="number" name="KapasitasLandasanTerbang" value="<?php echo $tampil['KapasitasLandasanTerbang']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>