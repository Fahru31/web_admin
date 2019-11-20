<?php
include("barang.php");

if(defined("IS_INDEX")==false)
{
    die("please stop here!");
}

require_once('aplikasi.php');

$data = array(
		'no'	=> $_POST['no'],
		'nama_barang'	=> $_POST['nama_barang'],
        'jumlah_barang'=> $_POST['jumlah_barang'],
        'harga_jual'=> $_POST['harga_jual'],
	);

simpan_data_barang($data);

?>



