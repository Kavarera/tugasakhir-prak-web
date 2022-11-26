<?php
session_start(); 
$totalHarga=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Services</title>
    <?php require "bscss.php"; require "getItems.php";?>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/checkout.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-light    ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">K-Services</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link active" href="order.php">Order</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="pricing.php">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <center>
        <div class="animate__animated animate__bounce page-title mt-5 mb-5">
            <h1>Keranjang qm</h1>
        </div>
    </center>


    <div class="container ">
        <div class="customCard mx-3">
            <!-- khusus lg -->
            <div class="row d-none d-lg-block">
                <?php 
                    //habis delete
                    if(isset($_GET["stat"])){
                        if(empty($_SESSION["itemcartxs"])){
                            echo '<center class="mt-5"><h1>TIDAK ADA ITEM</h1></center>';
                        }
                        else{
                            $items = getItemsLG($_SESSION["itemcartxs"]);
                            foreach($items as $item){
                                echo $item;
                            }
                        }
                    }
                
                    else{
                        //gaada POST
                        if(!isset($_POST["itemcarts"])){
                            echo '<center class="mt-5"><h1>TIDAK ADA ITEM</h1></center>';
                        }
                        //ada post
                        else{
                            if(empty($_POST["itemcarts"])){
                                echo '<center class="mt-5"><h1>TIDAK ADA ITEM</h1></center>';
                            }
                            else{
                                $_SESSION["itemcartxs"] = $_POST["itemcarts"];
                                $items = getItemsLG($_SESSION["itemcartxs"]);
                                foreach($items as $item){
                                    echo $item;
                                }
                            }
                        }
                    }
                ?>
            </div>
            <!-- mobile -->
            <div class="row d-xs-block d-lg-none">
                <?php
                //habis delete
                    if(isset($_GET["stat"])){
                        if(empty($_SESSION["itemcartxs"])){
                            echo '<center class="mt-5"><h1>TIDAK ADA ITEM1</h1></center>';
                        }
                        else{
                            $items = getItemsXS($_SESSION["itemcartxs"]);
                            foreach($items as $item){
                                echo $item;
                            }
                        }
                    }
                
                    else{
                        //gaada POST
                        if(!isset($_POST["itemcarts"])){
                            echo '<center class="mt-5"><h1>TIDAK ADA ITEM</h1></center>';
                        }
                        //ada post
                        else{
                            if(empty($_POST["itemcarts"])){
                                echo '<center class="mt-5"><h1>TIDAK ADA ITEM</h1></center>';
                            }
                            else{
                                $_SESSION["itemcartxs"] = $_POST["itemcarts"];
                                $items = getItemsXS($_SESSION["itemcartxs"]);
                                foreach($items as $item){
                                    echo $item;
                                }
                            }
                        }
                    }
                ?>
            </div>

            <div class="row mx-5 px-5 mt-5 border-tes">
                <a href="checkout_proses.php" class="btn-checkout">
                    <div id="btn-text-checkout" class="border-tes animate__animated ">Gas Checkout</div>
                </a>
            </div> 
        </div>
    </div>
    <?php require "bsjs.php";?>
    <script>
        document.getElementById("btn-text-checkout").addEventListener("mouseover",function(event){
           event.target.classList.add("animate__bounceInLeft");
        });
        document.getElementById("btn-text-checkout").addEventListener("mouseleave",function(event){
           setTimeout(() => {
            event.target.classList.remove("animate__bounceInLeft");
           }, 5000);
        });
    </script>
</body>
</html>