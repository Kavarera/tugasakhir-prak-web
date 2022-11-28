<?php
require '../koneksi.php';
if(!isset($_POST["nama-produk"])){
    header('Location: add-produk.php');
}
else{
    $result = mysqli_query($koneksi,'SELECT gambar FROM produk WHERE id='.$_POST["idproduk"]);
    $result = mysqli_fetch_row($result);
    $result = explode('/',$result[0]);
    $result = $result[sizeof($result)-1];
    $result = '../assets/products/'.$result;
    if(!unlink($result)){
        header('list-produk.php');
    }
    else{
        $uploaddir = '../assets/products/';
        $uploadfile = $uploaddir.time() . basename($_FILES['foto-produk']['name']);
        $newFileName = time().basename($_FILES['foto-produk']['name']);
        $newFileName = explode(' ',$newFileName);
        $newFileName= implode(' ',$newFileName);
        echo "<p>";
    
        if (move_uploaded_file($_FILES['foto-produk']['tmp_name'], $uploadfile)) {
            $result = mysqli_query($koneksi,'update produk set nama="'.$_POST["nama-produk"].'", harga='.$_POST["harga-produk"].',deskripsi="'.$_POST["deskripsi-produk"].'",gambar="http://127.0.0.1/TA/assets/products/'.$newFileName.'" where id ='.$_POST["idproduk"]);
            
            
            header('Location: list-produk.php');
        } else {
            header('Location: home.php');
        }
    }

    // echo "</p>";
    // echo '<pre>';
    // echo 'Here is some more debugging info:';
    // print_r($uploadfile);
    // print_r($_FILES);
    // print "</pre>";
}

?> 