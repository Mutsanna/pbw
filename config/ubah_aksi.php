<?php 
// koneksi database
include 'config.php';
//$koneksi = mysqli_connect("localhost","root","root","Tugas_pbw");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$merek = $_POST['merek'];
$nama = $_POST['nama'];
$warna = $_POST['warna'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
 
// mengedit data ke database
mysqli_query($koneksi,"UPDATE data_hp SET merek = '$merek', nama = '$nama', warna = '$warna', stok = '$stok', harga = '$harga' WHERE id_hp ='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../page/crud.php");
 
?>