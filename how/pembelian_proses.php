<?php 
    require '../koneksi.php';
    if(isset($_POST["kodePembelian"])){
        $result = mysqli_query($koneksi, 'SELECT id_barang FROM pembelian WHERE kode = "'.$_POST["kodePembelian"].'" and status = "MENUNGGU"');
        $result = mysqli_fetch_row($result);
        header("Location: pembelian.php?barang=".$result[0]."&kode=".$_POST["kodePembelian"]);
    }
?>