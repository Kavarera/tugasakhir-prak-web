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
    <title>K-Services Admin</title>
    <?php require '../bscss.php';?>
    <link rel="stylesheet" href="style/home.css">
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
                <a class="nav-link active" aria-current="page" href="home.php">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="pembelian.php">Pembelian</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="list-produk.php">Produk</a>
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

    <!-- list of services -->
    <div class="container mt-5">
        <div class="page-title">
            <h1 class="text-center">
                List Services
            </h1>
        </div>
        <!-- list of services -->
        <div class="row text-center mt-3 border-tes">
            <div class="col nomor">
                <h4>NO</h4>
            </div>
            <div class="col kode">
                <h4>Kode</h4>
            </div>
            <div class="col status">
                <h4>Status</h4>
            </div>
            <div class="col action">
                <h4>Action</h4>
            </div>

            
        </div>
        <!-- contoh -->
        <?php 
        require "../koneksi.php";
            $result = mysqli_query($koneksi,'select kode, layanan.nama as "layanan", status.nama as "status",status.id as "id_status" from pemesanan inner join layanan on layanan.id = id_layanan inner join status on status.id = id_status where id_layanan <4');

            if(mysqli_num_rows($result)>0){
                $urut=0;
                while($row = mysqli_fetch_assoc($result)){
                    $urut++;
                    if($row["id_status"]==1){
                        echo '<div class="row text-center mt-2 ">
                        <div class="col nomor">
                            <h4>'.$urut.'</h4>
                        </div>
                        <div class="col kode">
                            <h4>'.$row["kode"].'</h4>
                        </div>
                        <div class="col status">
                            <h4>'.$row["status"].'</h4>
                        </div>
                        <div class="col action d-grid gap-2">
                            <form method="POST" action="kerjakan.php">
                                <input type="hidden" value="'.$row["kode"].'" name="kodeLayanan">
                                <div class="d-grid gap-2">
                                    <button class="btn" type="submit">KERJAKAN</button>
                                </div>
                            </form>
                        </div>
                    </div>';
                    }
                    else if($row["id_status"]==2){
                        echo '<div class="row text-center mt-2 ">
                            <div class="col nomor">
                                <h4>'.$urut.'</h4>
                            </div>
                            <div class="col kode">
                                <h4>'.$row["kode"].'</h4>
                            </div>
                            <div class="col status">
                                <h4>'.$row["status"].'</h4>
                            </div>
                            <div class="col action d-grid gap-2">
                                <form method="POST" action="pembayaran.php">
                                    <input type="hidden" value="'.$row["kode"].'" name="kodeLayanan">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-selesai" type="submit">SELESAI</button>
                                    </div>
                                </form>
                            </div>
                        </div>';
                    }
                    else if($row["id_status"]==3){
                        echo '<div class="row text-center mt-2 ">
                            <div class="col nomor">
                                <h4>'.$urut.'</h4>
                            </div>
                            <div class="col kode">
                                <h4>'.$row["kode"].'</h4>
                            </div>
                            <div class="col status">
                                <h4>'.$row["status"].'</h4>
                            </div>
                            <div class="col action d-grid gap-2">
                                <form method="POST" action="kerjaselesai.php">
                                    <input type="hidden" value="'.$row["kode"].'" name="kodeLayanan">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-diterima" type="submit">DITERIMA</button>
                                    </div>
                                </form>
                            </div>
                        </div>';
                    }
                }
            }
        ?>
    </div>

    
    <!-- total service sama total pembelian -->
    <div class="container-fluid position-absolute top-100 start-50 translate-middle border-tes">
        <div class="row d-flex justify-content-center text-center">
            <div class="row">
                <div class="col-3 total-service">
                    <h2>
                        Total Services: 
                        <?php 
                            $res = mysqli_query($koneksi,'select COUNT(id) from pemesanan');
                            echo mysqli_fetch_row($res)[0];
                        ?>
                    </h2>
                </div>
                <div class="col-3">
                    <h2>
                        Sudah Diservis: 
                        <?php 
                            $res = mysqli_query($koneksi,'select COUNT(id) from pemesanan where id_status = 4');
                            echo mysqli_fetch_row($res)[0];
                        ?>
                    </h2>
                </div>
                <div class="col-6">
                    <h2>
                        Perkiraan Pendapatan Kotor: IDR 
                        <?php 
                            $res = mysqli_query($koneksi,'select sum(layanan.harga) from pemesanan inner join layanan on layanan.id = id_layanan where id_status=4;');
                            $tes = mysqli_fetch_row($res);
                            if(is_null($tes[0])){
                                echo '0';
                            }
                            else{
                                echo $tes[0];
                            }
                        ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <?php require '../bsjs.php';?>
</body>
</html>