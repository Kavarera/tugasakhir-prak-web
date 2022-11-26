<?php

require 'koneksi.php';
$itemCount = 0;
$prevItem = 0;
if (isset($_GET["item"])) {
    $itemCount = $_GET["item"];
} else {
    $itemCount = 6;
}
$result = mysqli_query($koneksi, "SELECT id, nama, deskripsi, gambar, harga FROM produk LIMIT $prevItem,$itemCount");
$products = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($products, $row);
}
$cartItem = array();
// echo json_encode($products);
//echo json_encode($products[0]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Services</title>
    <?php require 'bscss.php' ?>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/order.css">
    <script src="https://kit.fontawesome.com/01633dd7f3.js" crossorigin="anonymous"></script>
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
                    <div class="nav-item d-flex align-self-end mt-3 d-md-block d-lg-none">
                        <form method="POST" action="checkout.php">
                            <input type="hidden" value="" name="itemcarts" id="itemcartsjs">
                            <button type="submit" class="btn-invisible">
                                <i class=" fa-solid fa-cart-shopping " href="checkout.php"><span class="ms-2" id="cartShop">0</span></i>
                            </button>
                        </form>
                    </div>
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
            <div id="cartShop" class="d-none d-lg-block">
                <form method="POST" action="checkout.php">
                    <input type="hidden" value="" name="itemcarts" id="itemcartsjs2">
                    <button type="submit" class="btn-invisible">
                        <i class="fa-solid fa-cart-shopping"><span class="ms-2" id="cartShop-lg">0</span></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <h3 class="text-center mt-5 mb-4 titlePage">Products</h3>
    <div class="container mx-auto mt-5 border-tes">
        <div class="row ">
            <?php
            for ($i = 0; $i < count($products); $i++) {
                echo '<div class="col-md-4 d-flex justify-content-center align-items-stretch">
                <input type="hidden" value="'.json_encode($products[$i]).'">
                <div class="card px-3">
                    <img src="' . $products[$i]["gambar"] . '" class="card-img-top mt-3" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">' . $products[$i]["nama"] . '</h5>
                        <h6 class="card-subtitle mb-2 text-muted"> IDR ' . $products[$i]["harga"] . '</h6>
                        <p class="card-text mb-4">' . $products[$i]["deskripsi"] . '</p>
                        <button data-produk-id="'. $products[$i]["id"] .'" class="add-to-cart btn mt-auto align-self-start ">Add to cart</button>
                    </div>
                </div>
            </div>';
            };
            ?>
            <!-- <div class="col-md-4 d-flex justify-content-center align-items-stretch">
                <div class="card px-3">
                    <img src="assets/products/asrocks1.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">IDR 99999</h6>
                        <p class="card-text mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ex reprehenderit recusandae obcaecati cumque repellendus assumenda? Labore alias odit similique.</p>
                        <button class="btn add-to-cart mt-auto align-self-start ">Add to cart</button>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="row mt-3">
            <div class="col d-flex justify-content-start">
                <button class="btn btn-primary"><</button>
            </div>
            <div class="col d-flex justify-content-center">
                <p class="text-center">Need repair? <a href="register.php" class="text-decoration-none">Click Here</a></p>
            </div>
            <div class="col d-flex justify-content-end">
                <button class="btn btn-primary">></button>
            </div>
        </div>
    </div>



    <!-- FOOTER -->
    <div class="footer border-tes bg-dark text-white mt-5">
        <div class="container text-center text-md-left">
            <div class="row  d-flex justify-content-between text-center text-md-left">
                <div class="col-md-8 mt-3">
                    <h4 class="font-weight-bold text-uppercase">
                        Kavarera Company
                    </h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae fuga asperiores accusamus veniam adipisci nesciunt rerum vero, sed obcaecati provident, rem temporibus? Doloribus, pariatur reiciendis iste eos tempora nobis esse, distinctio recusandae asperiores sit illo dolor, explicabo modi omnis possimus.
                    </p>
                </div>
                <div class="col-md-2 mt-3">
                    <h5 class="text-uppercase">
                        Social Media
                    </h5>
                    <p>
                        <i class="fa-brands fa-instagram"></i><a target="_" href="https://www.instagram.com/r_kavarera"> Instagram</a>
                    </p>
                    <p>
                        <i class="fa-brands fa-instagram"></i><a target="_" href="https://www.instagram.com/indeed.justanx"> Instagram</a>
                    </p>
                    <p>
                        <i class="fa-brands fa-github"> </i><a target="_" href="https://www.github.com/kavarera"> Github</a>
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                <p>Copyrights 2022 All Rights Reserved by <strong><a href="https://www.instagram.com/r_kavarera">Kavarera</a></strong></p>
            </div>
        </div>
    </div>
    <script>
        
        //console.log(button.length);
        var itemCart=0;
        var selectedItem=[];
        var itemCartPassPHP;
        var button =document.getElementsByClassName('add-to-cart');
        //console.log(cs);
        for(var i=0;i<=button.length;i++){
            var btn = button[i]
            btn.addEventListener("click",function(event){
                selectedItem.push(event.target.dataset.produkId);
                itemCart++;
                document.getElementById('cartShop').innerHTML=itemCart;
                document.getElementById('cartShop-lg').innerHTML=itemCart;
                //console.log(selectedItem);
                itemCartPassPHP = selectedItem.join('-');
                document.getElementById("itemcartsjs").value = itemCartPassPHP;
                document.getElementById("itemcartsjs2").value = itemCartPassPHP;

            })
        }
    </script>
    <?php require 'bsjs.php' ?>
</body>

</html>