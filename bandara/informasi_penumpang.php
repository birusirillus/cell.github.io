<html>
    <head>
        <link rel="stylesheet" href="styletable.css">
    </head>
    Tabel Informasi Penumpang
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NamaPenumpang</td>
            <td>JenisKelamin</td>
            <td>NomorPenerbangan</td>
            <td>Aksi</td>
        </tr>
    <?php
        include 'konek.php';
        $data=mysqli_query($konek, "select * from informasipenumpang");
        while($tampil=mysqli_fetch_array($data)){
    ?>
    
    <tr>
        <td> <?php echo $tampil['ID'] ?> </td>
        <td> <?php echo $tampil['NamaPenumpang'] ?> </td>
        <td> <?php echo $tampil['JenisKelamin'] ?> </td>
        <td> <?php echo $tampil['NomorPenerbangan'] ?> </td>
        <td><a href="hapus_informasipenumpang.php?id=<?php echo $tampil['ID']; ?>">Hapus</a>
            <a href="edit-informasipenumpang.php?id=<?php echo $tampil['ID']; ?>">Edit</a>
        </td>
    </tr>

    <?php
        }
    ?>
    </table>
    <a href="input-informasipenumpang.php"> Tambahkan Data Baru</a>
</html>