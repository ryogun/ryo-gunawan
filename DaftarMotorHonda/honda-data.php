<h3> Data barang </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Motor</th>
        <th>Harga Motor</th>
        <th>Warna Motor</th>
    </tr>

    <?php
    include "KOneksi.php";

    $no=1;
    $ambildatal = mysqli_query($KOneksi,"select * from honda");
    /* While untuk mengulang*/
    while($tampil = mysqli_fetch_array($ambildatal)){
        echo"
        <tr>
            <td>$no</td>
            <td>$tampil[nama_motor]</td>
            <td>$tampil[harga_motor]</td>
            <td>$tampil[warna_motor]</td>
        </tr>";
        $no++;
    }
    ?>
</table>
