<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Services</title>
    <?php require 'bscss.php';?>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/barang.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light    ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">K-Services</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="order.php">Order</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="pricing.php">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="page-title container mt-5">
        <center>
            <h1 class="text-danger">KODE BARANG JANGAN SAMPAI HILANG</h1>
            <div class="mt-5 p-5 mx-5 kode-text border-tes">
                <h1>
                    <?php 
                        if(isset($_GET["kode"])){
                            echo $_GET["kode"];
                        }
                    ?>
                </h1>
            </div>
        </center>
    </div>

    

    
<?php require 'bsjs.php';?>
</body>
</html>