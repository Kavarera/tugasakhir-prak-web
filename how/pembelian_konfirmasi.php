<?php
    if(isset($_POST["kodeP"])){
        require '../koneksi.php';

        mysqli_query($koneksi,'update pembelian set status = "BERHASIL" where kode = "'.$_POST["kodeP"].'"');
        header("Location: pembelian.php");
    }
    else{
        header("Location: home.php");
    }


?>