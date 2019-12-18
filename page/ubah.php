<!DOCTYPE html>
<html>
    <head>
	    <title>CRUD</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
    <?php
    // mengaktifkan session
    session_start();

    // cek apakah user telah login, jika belum login maka di alihkan ke halaman login
    if($_SESSION['status'] !="login"){
    header("location:login.php");
    } 
    $id = $_GET['id'];
    include '../config/config.php';
    $data = mysqli_query($koneksi,"SELECT * from data_hp where id_hp='$id'");
	while($data_hp = mysqli_fetch_array($data)){
    ?>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        <img src="../img/p.png" width="30" height="30" class="d-inline-block align-top" alt="">
            &nbsp;Pemograman Berbasis Website
        </a>
    </nav>
    <ul class="nav justify-content-end bg-light">
        <li class="nav-item">
            <a class="nav-link" href="../index.php">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="chart.php">CHART</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="crud.php">CRUD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cetak.php">PRINT</a>
        </li>
    </ul>
    <br>
    <div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="crud.php">CRUD</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ubah</li>
        </ol>
    </nav>
    <!-- ini form -->
    <form method="post" action="../config/ubah_aksi.php">
        <div class="form-group">
            <label>Merek</label>
            <input class="form-control" name="id" type="hidden" value="<?php echo $data_hp['id_hp']; ?>">
            <input class="form-control" name="merek" type="text" value="<?php echo $data_hp['merek']; ?>">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input class="form-control" name="nama" type="text" value="<?php echo $data_hp['nama']; ?>">
        </div>
        <div class="form-group">
            <label>Warna</label>
            <input class="form-control" name="warna" type="text" value="<?php echo $data_hp['warna']; ?>">
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input class="form-control" name="stok" type="text" value="<?php echo $data_hp['stok']; ?>">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input class="form-control" name="harga" type="number" value="<?php echo $data_hp['harga']; ?>">
        </div>
        <button type="submit" class="btn btn-outline-primary btn-block">Submit</button>
    </form>
    <?php } ?>
    <br>
    <br>
    <br>
    <br>
    

        
    </div>
        <?php include('../content/footer.php');?>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>