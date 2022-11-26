<?php 
    session_start();
    require '../koneksi.php';
    $uname;
    $pwd;
    if(isset($_POST["username"])&&$_POST["password"]){
        $uname=$_POST["username"];
        $pwd=$_POST["password"];
        $result = mysqli_query($koneksi,"SELECT username , password FROM karyawan where username =\"".$uname."\"");
        if(mysqli_num_rows($result)>0){
            $result = mysqli_fetch_row($result);
            if($uname==$result[0]&&$pwd==password_verify($pwd,$result[1])){
                $_SESSION["loged"]=true;
                header("Location: home.php");
            }
            else{
                header("Location: index.php?stat=gagal");
            }
        }
    }
?>