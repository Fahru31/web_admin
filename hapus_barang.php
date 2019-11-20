<?php
if(defined("IS_INDEX")==false)
{
    die("please stop here!");
}
require_once('aplikasi.php');

$no = $_GET['no'];

hapus_barang($no);

echo "<script>
    window.location='index.php?page=barang';
    </script>";
?>
