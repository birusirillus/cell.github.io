<html>
    <head>
        <link rel="stylesheet" href="styletable.css">
    </head>
    Tabel Informasi Penerbangan
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NomorPenerbangan</td>
            <td>TanggalPenerbangan</td>
            <td>WaktuPenerbangan</td>
            <td>Aksi</td>
        </tr>
    <?php
        include 'konek.php';
        $data=mysqli_query($konek, "select * from informasipenerbangan");
        while($tampil=mysqli_fetch_array($data)){
    ?>
    
    <tr>
        <td> <?php echo $tampil['ID'] ?> </td>
        <td> <?php echo $tampil['NomorPenerbangan'] ?> </td>
        <td> <?php echo $tampil['TanggalPenerbangan'] ?> </td>
        <td> <?php echo $tampil['WaktuPenerbangan'] ?> </td>
        <td><a href="hapus_informasipenerbangan.php?id=<?php echo $tampil['ID']; ?>">Hapus</a>
            <a href="edit-informasipenerbangan.php?id=<?php echo $tampil['ID']; ?>">Edit</a>
        </td>
    </tr>

    <?php
        }
    ?>
    </table>
    <a href="input-informasipenerbangan.php"> Tambahkan Data Baru</a>
</html>