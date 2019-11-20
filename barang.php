<?php
if(defined("IS_INDEX")==false)
{
    die("please stop here!");
}
require_once('aplikasi.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<h3>Data Barang
    <span class="float-right">
        <a href="index.php?page=form_add_barang" class = " btn btn-primary">Tambah
        </a>    
    </span>
</h3>

<?php
    $data=get_data_barang();
?>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Jumlah Barang</th>
        <th>Harga Jual</th>
        <th>Opsi</th>
    </tr>
    <?php
        while($row = mysqli_fetch_assoc($data))
        {
            echo "<tr>
            <td>".$row['no']."</td>
            <td>".$row['nama_barang']."</td>
            <td>".$row['jumlah_barang']."</td>
            <td>".$row['harga_jual']."</td>
            <td>
                <a href='index.php?page=edit_barang&no=".$row['no']."'>Edit</a> |
                <a href='index.php?page=hapus_barang&no=".$row['no']."'>Hapus</a>
            </td>
        </tr>";
        }
    ?>
</table>