<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Services</title>
    <?php require "bscss.php"; ?>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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

    <!-- body form -->
    <div class="container">
        <center>
            <h1 class=" mt-3 page-title">Register Services</h1>
        </center>

        <div class="mt-5 border-tes">
            <form method="POST" action="register_proses.php">
                <div class="mt-3 mb-3 row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" required type="email" class="form-control" placeholder="ininamakamu@inidomainkamu.com" id="inputEmail">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input name="nama" required type="text" class="form-control" id="inputPassword" placeholder="hai, kenalan dong">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nomor Whatsapp</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                            <input name="nomorhp" required type="tel" class="form-control" pattern="[0-9]{10,12}" placeholder="Boleh minta nomor whatsapp nya?" aria-label="handphone" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Tipe Elektronik</label>
                    <div class="col-sm-10">
                        <select name="perangkat" id="device" required class="form-select" aria-label="Default select example">
                            <option value="laptop">Laptop</option>
                            <option value="komputer">Komputer</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Tipe Layanan</label>
                    <div class="col-sm-10">
                        <select name="layanan" id="service" required class="form-select" aria-label="Default select example">
                            <option value="1">Deep Clean</option>
                            <option value="2">Install Ulang</option>
                            <option value="3">Services</option>
                        </select>
                    </div>
                </div>
                <div class="mt-5 border-tes">
                    <div class="d-flex justify-content-between mt-3 px-3">
                        <h3 id="estimasi">Estimasi Harga: 150000</h3>
                        <div>
                            <button class="btn btn-green text-white" type="submit">Konfirmasi</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    require 'bsjs.php';
    ?>
    <script>
        var service = document.getElementById('service');
        service.addEventListener('change',pilihService);
        function pilihService(){
            console.log(service.value);harga();
        }

        var device = document.getElementById('device');
        device.addEventListener('change',pilihDevice);
        function pilihDevice(){
            console.log(device.value);harga();
        }

        function harga(){
            var h;
            if(service.value==1){
                if(device.value=="komputer"){
                    h= "200000";
                }
                else h= "150000";
            }
            else if(service.value==2){
                h= "100000";
            }
            else if(service.value==3){
                h= "- (Estimasi harga tergantung tingkat kerusakan)";
            }
            document.getElementById('estimasi') .innerHTML ="Estimasi Harga: "+h;
        }

    </script>
</body>

</html>