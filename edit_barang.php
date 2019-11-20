<?php
if(defined("IS_INDEX")==false)
{
    die("please stop here!");
}
require_once('aplikasi.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<h3>
	Form Edit Data Barang
    <span class="float-right">
        <a href="index.php?page=barang" class = " btn btn-light">
        	Kembali
        </a>    
    </span>
</h3>
<br/>

<?php
	$no = $_GET['no'];
	$data = get_barang_by_no($no);
?>


<form action="index.php?page=update_barang" method="post">

	<input type="hidden" name="no" value="<?php echo $no;?>" />

	<table>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang'];?>"></td>
		</tr>
		<tr>
			<td>Jumlah Barang</td>
			<td>:</td>
			<td><input type="text" name="jumlah_barang" value="<?php echo $data['jumlah_barang'];?>"></td>
		</tr>
        <tr>
			<td>Harga Jual</td>
			<td>:</td>
			<td><input type="text" name="harga_jual" value="<?php echo $data['harga_jual'];?>"></td>
		</tr>
		<td></td>
		<td></td>
		<td><input type="submit"/></td>
	</table>
	
</form>