<?php
require '../koneksi.php';
if(isset($_POST["idproduk"])){
    $re = mysqli_query($koneksi,'SELECT gambar FROM produk WHERE id = '.$_POST["idproduk"]);
    $re = mysqli_fetch_row($re);
    $re= explode('/',$re[0]);
    $re= $re[sizeof($re)-1];
    if(unlink('../assets/products/'.$re)){
        mysqli_query($koneksi,'DELETE FROM produk WHERE id = '.$_POST["idproduk"]);
        sleep(2);
        header("Location: list-produk.php");
    }
    else{
        header('Location: list-produk.php');
    }
} 
?>