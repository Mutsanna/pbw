<?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM data_hp WHERE id_hp='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../page/crud.php");
 
?>