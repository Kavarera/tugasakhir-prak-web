<?php
$server = "localhost";
$uname = "root";
$password ="";
$db = "TAWeb";
$koneksi = new mysqli($server,$uname,$password,$db);
if($koneksi->connect_error){
    die('Failed to connect\n').$koneksi->connect_error;
}
 ?>