<?php
function connect_to_db()
{
    $conn = mysqli_connect("localhost","root","","projek");

    if($conn == false)
    {
        echo mysqli_error($conn);
        die;
    }
    return $conn;
}
// ambil data
function get_data_barang()
{
    // konek ke db
    $conn = connect_to_db();
    $sql = "select * from barang";
    return mysqli_query($conn,$sql);
}

function get_barang_by_no($no)
{
    $conn = connect_to_db();
    $sql = "select * from barang where no=".$no;
    $query = mysqli_query($conn,$sql);
    return mysqli_fetch_array($query);

}

function hapus_barang($no)
{
    $conn = connect_to_db();
    $sql = "delete from barang where no=".$no;
    mysqli_query($conn,$sql);
}

function simpan_data_barang($data)
{
    $conn = connect_to_db();
    $no = $data['no'];
    $nama_barang = $data['nama_barang'];
    $jumlah_barang = $data['jumlah_barang'];
    $harga_jual = $data['harga_jual'];
    $sql = "insert into barang
        values ('$no','$nama_barang','$jumlah_barang','$harga_jual')";
    mysqli_query ($conn,$sql);
}

function update_data_barang($data)
{
    $conn = connect_to_db();
    $no = $data['no'];
    $nama_barang = $data['nama_barang'];
    $jumlah_barang = $data['jumlah_barang'];
    $harga_jual = $data['harga_jual'];
    $sql = "update barang
        set nama_barang ='$nama_barang',
            jumlah_barang = '$jumlah_barang',
            harga_jual = '$harga_jual'
        where no = '$no'";
    mysqli_query ($conn,$sql);
}

function proses_login($username,$password)
{
    $conn = connect_to_db();
    $sql = "SELECT * FROM pengguna WHERE username='$username'
    AND pass='".md5($password)."'";
    $query = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($query);
    return ($num > 0);
}
function redirect_to($page)
{
    echo "<script>";
}

?>