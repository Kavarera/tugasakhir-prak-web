<?php
    require '../koneksi.php';
    if(isset($_POST["kodeLayanan"])){
        mysqli_query($koneksi,'update pemesanan set id_status = 4 where kode = "'.$_POST["kodeLayanan"].'"');

        header("Location: home.php");
    }
    else{
        header("Location: home.php");
    }
?>