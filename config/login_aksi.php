<?php
include 'config.php';
 
$username = $_POST['username'];
$password = md5($_POST['pass']);
 
$login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['status'] = "login";
	header("location:../index.php");
}else{
	header("location:../page/login.php");	
}
 
?>