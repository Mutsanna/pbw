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
        <li class="nav-item">
            <a class="nav-link" href="../config/logout_aksi.php">LOGOUT</a>
        </li>
    </ul>
    <br>
    <div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chart</li>
        </ol>
    </nav>
    <script src="../asset/code/highcharts.js"></script>
    <script src="../asset/code/modules/exporting.js"></script>
    <script src="../asset/code/modules/export-data.js"></script>
    <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    <?php
    include '../config/config.php';
    $hasil=mysqli_query($koneksi,"SELECT nama, stok from data_hp");
    $data="";
    while($row=mysqli_fetch_array($hasil))
    {
        $data=$data. "{ name: '"  . $row['nama'] . "', y:" .  $row['stok'] ." },";
    }
    ?>
    <script type="text/javascript">
	Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Jumlah smartphone'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Merek',
        colorByPoint: true,
        data: 
		[
		<?php
			echo $data;
		?>
		]
    }]
});
</script>


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