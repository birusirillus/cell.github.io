<html>
    <head>
        <link rel="stylesheet" href="styletable.css">
    </head>
    Tabel Informasi Tujuan
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Maskapai</td>
            <td>Asal</td>
            <td>Tujuan</td>
            <td>KodeBandara</td>
            <td>Aksi</td>
        </tr>
    <?php
        include 'konek.php';
        $data=mysqli_query($konek, "select * from informasitujuan");
        while($tampil=mysqli_fetch_array($data)){
    ?>
    
    <tr>
        <td> <?php echo $tampil['ID'] ?> </td>
        <td> <?php echo $tampil['Maskapai'] ?> </td>
        <td> <?php echo $tampil['Asal'] ?> </td>
        <td> <?php echo $tampil['Tujuan'] ?> </td>
        <td> <?php echo $tampil['KodeBandara'] ?> </td>
        <td><a href="hapus_informasitujuan.php?id=<?php echo $tampil['ID']; ?>">Hapus</a>
            <a href="edit-informasitujuan.php?id=<?php echo $tampil['ID']; ?>">Edit</a>
        </td>
    </tr>

    <?php
        }
    ?>
    </table>
    <a href="input-informasitujuan.php"> Tambahkan Data Baru</a>
</html>