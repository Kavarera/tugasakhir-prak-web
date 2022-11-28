<?php
    session_start();
    if(!isset($_SESSION["loged"])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Services</title>
    <?php require '../bscss.php';?>
    <link rel="stylesheet" href="style/list-produk.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-light    ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">K-Services Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.php">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="pembelian.php">Pembelian</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="list-produk.php">Produk</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="add-produk.php">Add Produk</a>
                </li>
            </ul>
            </div>
            <div class="logout-link">
                <a href="logout.php">Keluar</a>
            </div>
        </div>
    </nav>


    <!-- body -->
    <div class="container mt-5">
        <!-- page title -->
        <div class="page-title">
            <h1>List Produk</h1>
        </div>

        <!-- list of product -->
        <div class="row text-center mt-3 list-produk-title">
            <div class="col-3 nomor">
                <h4>NAMA</h4>
            </div>
            <div class="col-2 kode">
                <h4>HARGA</h4>
            </div>
            <div class="col-4 status">
                <h4>DESKRIPSI</h4>
            </div>
            <div class="col-3 action">
                <h4>Action</h4>
            </div>
        </div>
        <?php 
            require '../koneksi.php';
            $result = mysqli_query($koneksi,'SELECT id, nama, harga, deskripsi from produk');
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_row($result)){
                    echo '<div class="row text-center mt-3 list-item">
                    <div class="row mb-5 text-center">
                        <div class="col-3 nomor">
                            <h4>'.$row[1].'</h4>
                        </div>
                        <div class="col-2 kode">
                            <h4>'.$row[2].'</h4>
                        </div>
                        <div class="col-4 pr-5 status">
                            <h4>'.$row[3].'</h4>
                        </div>
                        <div class="col-3 action">
                            <div class="row">
                                <div class="col">
                                    <form method="POST" action="editproduk.php">
                                        <input type="hidden" name="idproduk" value="'.$row[0].'">
                                        <button class="btn-action edit">EDIT</button>
                                    </form>
                                </div>
                                <div class="col">
                                <form method="POST" action="deleteproduk.php">
                                        <input type="hidden" name="idproduk" value="'.$row[0].'">
                                        <button class="btn-action delete">DELETE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                }
            }
        ?>
        <!-- LIST ATUOMATIC -->
        <!-- <div class="row text-center mt-3 list-item">
            <div class="row mb-5">
                <div class="col nomor">
                    <h4>ID</h4>
                </div>
                <div class="col nomor">
                    <h4>NAMA</h4>
                </div>
                <div class="col kode">
                    <h4>HARGA</h4>
                </div>
                <div class="col status">
                    <h4>DESKRIPSI</h4>
                </div>
                <div class="col action">
                    <div class="row">
                        <div class="col">
                            <form method="POST" action="editproduk.php">
                                <input type="hidden" name="idproduk" value="">
                                <button class="btn-action edit">EDIT</button>
                            </form>
                        </div>
                        <div class="col">
                        <form method="POST" action="deleteproduk.php">
                                <input type="hidden" name="idproduk" value="">
                                <button class="btn-action delete">DELETE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    </div>



    
<?php require '../bsjs.php';?>
</body>
</html>