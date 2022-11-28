<?php
require '../koneksi.php';
if(!isset($_POST["nama-produk"])){
    header('Location: add-produk.php');
}
else{
    $uploaddir = '../assets/products/';
    $uploadfile = $uploaddir.time() . basename($_FILES['foto-produk']['name']);
    $newFileName = time().basename($_FILES['foto-produk']['name']);
    $newFileName = explode(' ',$newFileName);
    $newFileName= implode(' ',$newFileName);
    echo "<p>";

    if (move_uploaded_file($_FILES['foto-produk']['tmp_name'], $uploadfile)) {
        $result = mysqli_query($koneksi,'INSERT INTO produk(nama,harga,deskripsi,gambar) values ("'.$_POST["nama-produk"].'" , '.$_POST["harga-produk"].', "'.$_POST["deskripsi-produk"].'" , "http://127.0.0.1/TA/assets/products/'.$newFileName.'")');
        header('Location: add-produk.php?berhasil=1');
    } else {
        header('Location: home.php');
    }

    // echo "</p>";
    // echo '<pre>';
    // echo 'Here is some more debugging info:';
    // print_r($uploadfile);
    // print_r($_FILES);
    // print "</pre>";
}

?> 