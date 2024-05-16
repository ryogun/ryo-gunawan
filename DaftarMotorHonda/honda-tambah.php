<h3> Tambah Barang</h3>

<form action="" method="post">
    <table>
    <tr>
        <td width="120"> Nama Motor</td>
        <td> <input type="text" name="nama_motor"> </td>
    </tr>
    <tr>
        <td> Harga Motor</td>
        <td> <input type="text" name="harga_motor"> </td>
    </tr>
    <tr>
        <td> Warna Motor</td>
        <td> <input type="text" name="warna_motor"> </td>
    </tr>
    <tr>
        <td></td>
        <td> <input type="submit" name="proses" value="simpan"> </td>
    </tr>
    </table>
</form>

<?php
include "KOneksi.php";


if(isset($_POST['proses'])){
    mysqli_query($KOneksi, "insert into honda set
    nama_motor = '$_POST[nama_motor]',
    harga_motor = '$_POST[harga_motor]',
    warna_motor = '$_POST[warna_motor]'");

    echo "Data baru telah di tersimpan";

    include "honda-data.php";

}
?>