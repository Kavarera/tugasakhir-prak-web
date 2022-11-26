<?php
    session_start();
    if(isset($_SESSION["loged"])){
        header("Location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Services ADMIN</title>
    <?php require '../bscss.php'; ?>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <div class="container mt-5 ">
        <div class="container login bg-light">
            <div class="row">
                <div class="col login-input-section px-5">
                    <div class="row login-title">
                        <div class="row d-flex justify-content-center">
                            <img src="assets/profile-png.png" alt="">
                        </div>
                        <h1>Welcome Back, Kavarera Team</h1>
                    </div>
                    <div class="row login-input mt-3 mb-3 ">
                        <form method="POST" action="login_proses.php">
                            <p>Please login to your account</p>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label-custom">Username</label>
                                <input name="username" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your username in here">
                            </div>
                            <div class="mb-4">
                                <label for="exampleFormControlInput1" class="form-label-custom">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Your username in here">
                            </div>
                            <div class="text-center pt-1 mb-1 pb-1">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                                    in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col login-design-section gradient-custom-2 d-flex align-items-center">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h1 class="mb-4">Motivation of the day</h1>
                    <p class="randomQuote large mb-0"><?php require 'randomWord.php'; getRandomWord();?></p>
                </div>

                </div>
            </div>
        </div>
    </div>
<?php require '../bsjs.php'; ?>
    <?php 
    if(isset($_GET["stat"])){
        if($_GET["stat"]=="gagal"){
            echo '<script>alert("Username atau password Salah");</script>';
        }
    }
    ?>
</body>
</html>