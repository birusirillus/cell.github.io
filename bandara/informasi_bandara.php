<html>
    <head>
        <link rel="stylesheet" href="styletable.css">
    </head>
    Tabel Informasi Bandara
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Kode Bandara</th>
            <th>Nama Bandara</th>
            <th>Kota</th>
            <th>Negara</th>
            <th>Kode Pos</th>
            <th>Kapasitas Terminal</th>
            <th>Kapasitas Landasan Terbang</th>
            <th>Aksi</th>
        </tr>
    <?php
        include 'konek.php';
        $data=mysqli_query($konek, "select * from informasibandara");
        while($tampil=mysqli_fetch_array($data)){
    ?>
    
    <tr>
        <td> <?php echo $tampil['ID'] ?> </td>
        <td> <?php echo $tampil['KodeBandara'] ?> </td>
        <td> <?php echo $tampil['NamaBandara'] ?> </td>
        <td> <?php echo $tampil['Kota'] ?> </td>
        <td> <?php echo $tampil['Negara'] ?> </td>
        <td> <?php echo $tampil['KodePos'] ?> </td>
        <td> <?php echo $tampil['KapasitasTerminal'] ?> </td>
        <td> <?php echo $tampil['KapasitasLandasanTerbang'] ?> </td>
        <td><a class="action-button1" href="hapus_informasibandara.php?id=<?php echo $tampil['ID']; ?>">Hapus</a>
            <a class="action-button2" href="edit-informasibandara.php?id=<?php echo $tampil['ID']; ?>">Edit</a>
        </td>
    </tr>

    <?php
        }
    ?>
    </table>
    <button class="tombol"><a class="add-button" href="input-informasibandara.php"> Tambahkan Data Baru</a></button> 
</html>