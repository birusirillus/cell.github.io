<link rel="stylesheet" href="input.css">
<div>
<h1> TAMBAH DATA INFORMASI BANDARA </h1>
     <form method="post" action="input-aksi-informasibandara.php">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="number" name="ID"></td>
            </tr>
            <tr>
                <td>Kode Bandara</td>
                <td><input type="text" name="KodeBandara"></td>
            </tr>
            <tr>
                <td>Nama Bandara</td>
                <td><input type="text" name="NamaBandara"></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td><input type="text" name="Kota"></td>
            </tr>
            <tr>
                <td>Negara</td>
                <td><input type="text" name="Negara"></td>
            </tr>
            <tr>
                <td>KodePos</td>
                <td><input type="number" name="KodePos"></td>
            </tr>
            <tr>
                <td>KapasitasTerminal</td>
                <td><input type="number" name="KapasitasTerminal"></td>
            </tr>
            <tr>
                <td>KapasitasLandasanTerbang</td>
                <td><input type="number" name="KapasitasLandasanTerbang"></td>
            </tr>
        </table>
        <input class="button1" type="submit" value="KEMBALI">
        <input class="button2" type="submit" value="SIMPAN">

     </form> 
</div>