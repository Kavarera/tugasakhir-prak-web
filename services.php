<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Services</title>
    <?php require 'bscss.php';?>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/services.css">
</head>
<body>
    <!-- Navbar -->
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
                        <a class="nav-link" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.php">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="services.php">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <center>
        <div class="animate__animated animate__bounce page-title mt-5">
            <h1>Check Service Status</h1>
        </div>
    </center>

    <div class="container">
        <form method="GET" action="services.php">
            <div class="row mt-5 d-grid gap-2 d-flex justify-content-center">
                <input  id="inputKode" type="text"  name="kode" class="animate__animated animate__bounce animate__delay-2s animate__infinite text-center input-kode" <?php if(isset($_GET["kode"])){
                    if(!empty($_GET["kode"])){
                        echo 'value="'.$_GET["kode"].'"';
                    }
                    }?> pattern="[a-z0-9A-Z]{15}" placeholder="Kode nya masukin sini ya">
            </div>

            <div class="row animate__animated animate__bounce">
                <button type="submit" class="btn mt-4">
                    Periksa
                </button>
            </div>
            <div class="row mt-5">
                    <?php 
                        if(isset($_GET["kode"])){
                            if(empty($_GET["kode"])){
                                header("Location: services.php");
                            }
                            require "getStatus.php";
                            $status = statusService($_GET["kode"]);
                            echo '<h1 class="text-center">
                            Status
                        </h1>';

                            echo '<div class="statusService"><h2 class="text-center mt-3">'.$status.'</h2></div>';;
                        } 
                    ?>
            </div>
        </form>
    </div>

    

    <?php require "bsjs.php";?>
    <script>
        var ik = document.getElementById('inputKode');
        ik.addEventListener("focus",()=>{
            ik.classList.remove("animate__infinite");
        }
        );
        ik.addEventListener("focusout",()=>{
            if(!ik.value){
                setTimeout(()=>{
                    ik.classList.add("animate__infinite")
                },2000)
            }
        });
        <?php 
            if(isset($_GET["kode"])){
                if(!empty($_GET["kode"])){
                    echo 'ik.classList.remove("animate__infinite");';
                }
            }
        ?>
    </script>
</body>
</html>