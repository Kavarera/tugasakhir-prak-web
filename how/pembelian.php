<?php

require '../koneksi.php';
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
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/pembelian.css">
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
                <a class="nav-link active" href="pembelian.php">Pembelian</a>
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


    <!-- INPUT KODE PEMBELIAN -->
    <div class="container mt-5 border-tes">
        <div class="page-title">
            <h1>KONFIRMASI PEMBELIAN</h1>
        </div>

        <div class="input-kode mt-5 mb-3 border-tes">
            <form method="POST" action="pembelian_proses.php">
            <div class="mb-3">
                <?php 
                if(isset($_GET["kode"])){
                    echo '<input type="text" name="kodePembelian" class="form-control text-center kode-pembelian mt-5" id="exampleInputPassword1" value="'.$_GET["kode"].'" placeholder="Kode Pembelian Disini">';
                }
                else{
                    echo '<input type="text" name="kodePembelian" class="form-control text-center kode-pembelian mt-5" id="exampleInputPassword1" placeholder="Kode Pembelian Disini">';
                }
                ?>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn mt-4">
                    Periksa
                </button>
            </div>
            </form>
        </div>
        <div class="row mt-5 tabel-barang d-flex justify-content-center">
            <div class="row text-center mt-5 mb-3">
                <div class="col-6 item-tabel nama-barang-title">
                    <h2>Barang</h2>
                </div>
                <div class="col-6 item-tabel harga-barang-title">
                    <h3>Harga</h3>
                </div>
            </div>
            <?php 
            if(isset($_GET["barang"])&&isset($_GET["kode"])&&!empty($_GET["barang"])){

                $idsBarang = explode('-',$_GET["barang"]);
                foreach($idsBarang as $id){
                    $result = mysqli_query($koneksi, 'select nama, harga from produk where id = '.$id);
                    $result=mysqli_fetch_row($result);
                    echo '<div class="row text-center">
                    <div class="col item-tabel nama-barang">
                        <h2>'.$result[0].'</h2>
                    </div>
                    <div class="col item-tabel harga-barang">
                        <h3>IDR '.$result[1].'</h3>
                    </div>
                </div>';

                }
                echo '<div class="row konfirmasi-section">
                <form method="POST" action="pembelian_konfirmasi.php">
                    <div class="d-grid gap-2">
                        <input type="hidden" name="kodeP" value="'.$_GET["kode"].'">
                        <button type="submit" class="btn btn-confirm mt-4">
                            KONFIRMASI
                        </button>
                    </div>
                </form>
            </div>';
            }
            ?>
        </div>
        
    </div>
    <!-- keterangan pembelian -->
    <div class="container-fluid border-tes mt-5">
        <div class="row">
            <div class="col text-center">
                <h2>
                    Pendapatan Kotor: IDR
                    <?php 
                        $result = mysqli_query($koneksi, 'select sum(totalHarga) from pembelian where status = "BERHASIL"');
                        $tes = mysqli_fetch_row($result);
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

<?php require '../bsjs.php';?>
</body>
</html>