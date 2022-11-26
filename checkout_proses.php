<?php
session_start();
function generateRandomString($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
require 'koneksi.php';
if(empty($_SESSION["itemcartlg"])&&empty($_SESSION["itemcartxs"])){
    die('no ic');
}
else{
    $ic;
    if(empty($_SESSION["itemcartlg"])){
        $ic = $_SESSION["itemcartxs"];
    }
    else{
        $ic=$_SESSION["itemcartlg"];
    }
    $kodePembelian = generateRandomString(15);
    $totalHarga=0;
    $items = $ic;
    $ic = explode('-',$ic);
    foreach($ic as $id){
        $res = mysqli_query($koneksi,"SELECT harga FROM produk WHERE id = ".$id);
        $totalHarga=$totalHarga+ mysqli_fetch_row($res)[0];
    }
    mysqli_query($koneksi,'INSERT INTO pembelian(kode,id_barang, totalHarga) values("'.$kodePembelian.'","'.$items.'", '.$totalHarga.')');
    header("Location: barang.php?kode=".$kodePembelian);
}
?>

