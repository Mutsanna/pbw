<?php 
// koneksi database
include 'config.php';
//$koneksi = mysqli_connect("localhost","root","root","Tugas_pbw");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 

// menangkap data yang di kirim dari form
$merek = $_POST['merek'];
$nama = $_POST['nama'];
$warna = $_POST['warna'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$foto_ = $_FILES['foto']['name'];
$tmp_name = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp_name,'../img/'.$foto_);

 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO data_hp VALUES(NULL, '$merek','$nama','$warna','$stok','$harga','$foto_')");
 
// mengalihkan halaman kembali ke index.php
header("location:../page/crud.php");
 
?>