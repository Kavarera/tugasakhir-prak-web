<?php
    session_start();

    if(isset($_POST["index"]))
    {
        if(empty($_POST["index"]))
        {
            echo 'gaada';
        }
        else{
            if(isset($_SESSION["itemcartxs"])){
                $temp = explode('-',$_SESSION["itemcartxs"]);
                unset($temp[$_POST["index"]-1]);
                $result = implode("-",$temp);
                $_SESSION["itemcartxs"]=$result;
                header("Location: checkout.php?stat=true");
            }
        }
    }
    else{
        die('gaada post');
    }
?>