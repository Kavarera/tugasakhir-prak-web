<?php
    define("status",1);
    function generateRandomString($length = 15) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    require "koneksi.php";
    $kode =generateRandomString();
    $nama =$_POST["nama"];
    $email = $_POST["email"];
    $nomorhp = $_POST["nomorhp"];
    $perangkat = $_POST["perangkat"];
    $layanan = $_POST["layanan"];
    echo status;
    $result = mysqli_query($koneksi,'INSERT INTO pelanggan(nama,nomorhp,email) values("'.
    $nama.'","'.$nomorhp.'","'.$email.'")');
    
    if(!$result){
        die('Gagal input pelanggan');
    }

    $result=mysqli_query($koneksi,'INSERT INTO pemesanan(kode,id_layanan,id_status) VALUES("'.$kode.'",'.$layanan.','.status.')');
    if(!$result){
        die('Gagal input pemesanan');
    }
    else {
        header("Location: services.php?kode=".$kode);
    }
    
?>