<?php
if(defined("IS_INDEX")==false)
{
    die("please stop here!");
}
require_once('aplikasi.php');

?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<h3>
	Form Tambah Data Barang
    <span class="float-right">
        <a href="index.php?page=barang" class = " btn btn-light">
        	kembali
        </a>    
    </span>
</h3>

<br/>
<form action="index.php?page=simpan_barang" method="post">
	<table>
		<tr>
			<td>No</td>
			<td>:</td>
			<td><input type="text" name="no"></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" name="nama barang"></td>
		</tr>
		<tr>
			<td>Jumlah Barang</td>
			<td>:</td>
			<td><input type="text" name="jumlah barang"></td>
		</tr>
        <tr>
			<td>Harga Jual</td>
			<td>:</td>
			<td><input type="text" name="harga jual"></td>
		</tr>
		<td></td>
		<td></td>
		<td><input type="submit"/></td>
	</table>
	
</form>