<?php 
session_start();
if(!isset($_SESSION["loged"])){
    header("Location: index.php");
}
if(!isset($_POST["idproduk"])){
    header("Location: add-produk.php");
}

require '../koneksi.php';

$result = mysqli_query($koneksi,'SELECT nama,harga,deskripsi,gambar FROM produk WHERE id='.$_POST["idproduk"]);
$result = mysqli_fetch_row($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Services</title>
    <?php require '../bscss.php';?>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/addproduk.css">
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

    <div class="container mt-5 pt-4">
        <div class="page-title">
            <h1>
                EDIT PRODUK
            </h1>
        </div>
        <div class="p-5">
        <form enctype="multipart/form-data" action="editupload.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Produk Kamu</label>
                <input required type="text" name="nama-produk" class="form-control" id="exampleFormControlInput1" placeholder="Monitor Gaming" value="<?php echo $result[0]?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Harga Produk Kamu</label>
                <input required type="text" name="harga-produk" class="form-control" id="exampleFormControlInput1" placeholder="200000" value="<?php echo $result[1]?>" >
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="form-floating">
                        <textarea required name="deskripsi-produk" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?php echo $result[2]?></textarea>
                        <label for="floatingTextarea2">Deskripsi</label>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <input required type="file" name="foto-produk" class="form-control" id="inputGroupFile02">
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-end">
                <input type="hidden" name="idproduk" value="<?php echo $_POST["idproduk"] ?>">
                <input type="submit" class="btn mt-5 " value="Upload produk">
            </div>
        </form>
        </div>
    </div>

    

<?php require '../bsjs.php';?>
</body>
</html>