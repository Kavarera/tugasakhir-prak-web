<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Services</title>
    <?php require "bscss.php";?>
    <link rel="stylesheet" href="style/index.css">
    <link rel="preload" as="image" href="assets/*.jpg">
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
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="order.php">Order</a>
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
    
    <!--Caresoul-->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner" style="font-family: 'Share Tech Mono';">
            <div class="carousel-item-container">
                <div class="carousel-item active">
                    <img src="assets/service2.jpg" class="d-block w-100" alt="Service Motherboard">
                </div>
                <div class="carousel-item">
                    <img src="assets/service1.jpg" class="d-block w-100" alt="Service Motherboard">
                </div>
                <div class="carousel-item">
                    <img src="assets/service3.jpg" class="d-block w-100" alt="Service Motherboard">
                </div>
                <div class="carousel-container-caption">
                    <h1 class="text-center">
                        TECH<br><br>IMPROVE<br><br>ALWAYS
                    </h1>
                    <div class="btn ">
                        <a href="order.php">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <div class="kontener mb-5">
        <div class="showAnim">
            <div class="row caption-section">
                <div class="col-lg-8">
                    <h1 class="caption-section-text">24/7 Client Support</h1>
                    <div class="d-lg-none d-block">
                            <img class="my-3 caption-section-gambar" src="assets/customer-support.jpg" alt="Customer Support">
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione velit esse omnis neque sint explicabo deleniti quod corrupti iusto, temporibus, reiciendis ducimus delectus at impedit! Eius itaque iure explicabo assumenda tempora distinctio. Magni quod officiis aliquam perspiciatis cum dolorem reprehenderit adipisci itaque sit excepturi aliquid incidunt, accusamus tempore nulla vero. Voluptas dicta sapiente delectus, quo quas corrupti cum libero temporibus?</p>
                </div>
                <div class="col-lg d-none d-lg-block">
                    <img class="my-3 caption-section-gambar" src="assets/customer-support.jpg" alt="Customer Support">
                </div>
            </div>
        </div>
        <div class="showAnim mt-5">
            <div class="row caption-section">
                <div class="col-lg-8">
                    <h1 class="caption-section-text">1 Month Service Warranty</h1>
                    <div class="d-lg-none d-block">
                            <img class="my-3 caption-section-gambar" src="assets/warranty.jpg" alt="Customer Support">
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consectetur maxime mollitia cupiditate aperiam ab quidem. Reprehenderit sapiente exercitationem ipsa voluptatem. Ipsa nulla quisquam enim assumenda laboriosam. Tempore porro consequatur voluptatibus sequi est eos expedita repellendus asperiores, neque eum eaque laudantium numquam, blanditiis voluptates suscipit nemo, ad dolor magnam? Autem quos eaque porro commodi, pariatur architecto nisi consequuntur nihil facere blanditiis labore itaque aperiam, incidunt vero eius ut aliquid obcaecati.</p>
                </div>
                <div class="col-lg d-none d-lg-block">
                    <img class="my-3 caption-section-gambar" src="assets/warranty.jpg" alt="Customer Support">
                </div>
            </div>
        </div>
        <div class="showAnim mt-5">
            <div class="row caption-section">
                <div class="col-lg-8">
                    <h1 class="caption-section-text">Fair Price</h1>
                    <div class="d-lg-none d-block">
                            <img class="my-3 caption-section-gambar" src="assets/discount.jpg" alt="Customer Support">
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione velit esse omnis neque sint explicabo deleniti quod corrupti iusto, temporibus, reiciendis ducimus delectus at impedit! Eius itaque iure explicabo assumenda tempora distinctio. Magni quod officiis aliquam perspiciatis cum dolorem reprehenderit adipisci itaque sit excepturi aliquid incidunt, accusamus tempore nulla vero. Voluptas dicta sapiente delectus, quo quas corrupti cum libero temporibus?</p>
                </div>
                <div class="col-lg d-none d-lg-block">
                    <img class=" my-3 caption-section-gambar" src="assets/discount.jpg" alt="Customer Support">
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-evenly mt-5">
            <a href="order.php" class="btn-normal btn-green text-center showAnim">Order</a>
            <a href="register.php" class="btn-normal btn-purple text-center showAnim">Repair</a>
        </div>
        <div class="mt-5 row">
            <div class="col">
                <div class="row">
                </div>
            </div>
            <div class="col">
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    
    <!-- FOOTER -->
    <div class="footer bg-dark text-white mt-5">
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

    <?php require "bsjs.php";?>
    <script type="text/javascript">
        window.addEventListener('scroll',slideUp);
        function slideUp(){
            var obj = document.querySelectorAll('.showAnim');
            for(var i=0;i<obj.length;i++){
                var wh = window.innerHeight;
                var top =obj[i].getBoundingClientRect().top;
                var point = 150;
                if(top<=wh - point){
                    obj[i].classList.add('slideUp');
                }
                else{
                    obj[i].classList.remove('slideUp');
                }
            }
        }
    </script>
</body>
</html>