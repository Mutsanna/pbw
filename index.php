<html>
    <head>
        <title>PBW</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <?php
        // mengaktifkan session
        session_start();
 
        // cek apakah user telah login, jika belum login maka di alihkan ke halaman login
        if($_SESSION['status'] !="login"){
	    header("location:page/login.php");
        }
    ?>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        <img src="./img/p.png" width="30" height="30" class="d-inline-block align-top" alt="">
            &nbsp;Pemograman Berbasis Website
        </a>
    </nav>
    <ul class="nav justify-content-end bg-light">
        <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="page/chart.php">CHART</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="page/crud.php">CRUD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="page/cetak.php">PRINT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="config/logout_aksi.php">LOGOUT</a>
        </li>
    </ul>
    <br>
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Fluid jumbotron</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>
	<br>
    <div class="media">
        <img src="img/p.png" width="70" height="70" class="mr-3" alt="...">
        <div class="media-body">
            <h5 class="mt-0">Media heading</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-3">
                <a class="mr-3" href="#">
                    <img src="img/p.png" width="70" height="70" class="mr-3" alt="...">
                </a>
                <div class="media-body">
                    <h5 class="mt-0">Media heading</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
        </div>
    </div>
	<br>
    <br>
    <br>
    <br>
    </div>
    <?php include('content/footer.php');?>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>