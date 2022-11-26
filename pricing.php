<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Services</title>
    <?php require "bscss.php";?>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/pricing.css">
    <link rel="preload" as="image" href="assets/*.jpg">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
    <!-- NAVBAR -->
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
                        <a class="nav-link active" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="parallax">
        <div class="row border-tes position-absolute start-50 top-50 translate-middle">
            <h1 class="text-white text-center">
                WHY SERVICES?
            </h1>

        </div>
    </div>
    
    <!-- lg display -->
    <div class="header-body pt-3 d-none d-lg-block">
        <div class="row">
            <div class="col-5">
                <img src="assets/repair-phone.jpg" alt="">
            </div>
            <div class="border-tes col-7 header-body-text">
                <div>
                    <h1 class="header-body-text-caption">We Provide You The Best Service</h1>
                </div>
                <div class="header-body-text-description mt-2">
                    <h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eius, quas voluptatibus earum quaerat incidunt maiores illo saepe eaque aut eos quis. Aperiam, provident error? Consequuntur autem maiores repellendus itaque ipsam praesentium eaque, beatae non laborum quibusdam fugiat nisi, ea similique explicabo debitis laboriosam fugit neque aliquid exercitationem officiis. Libero, beatae ex? Rem, repudiandae. Magni doloremque culpa quidem explicabo eaque ducimus et libero perferendis velit, fugiat reiciendis illum facere, voluptatem nam expedita eum sunt nesciunt laborum! Fugit quisquam aliquam ab voluptatum numquam quos nulla, suscipit blanditiis rem consequuntur nostrum, odit, totam laboriosam. Vel repellendus, totam recusandae vero facilis aliquam dignissimos eveniet, rem, asperiores harum explicabo eius expedita perferendis possimus! Temporibus recusandae officiis ab quas consectetur magni molestiae quaerat nihil ut rem modi, ea, iusto harum neque, in maiores! Voluptatum explicabo sequi rerum! Hic, nesciunt neque eius qui ut, illum voluptas voluptatem veritatis itaque soluta nihil incidunt, dignissimos vero nobis quam.
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Body -->
    <div class="kontener mt-5 ">
        <!-- Display Lower than LG For Header -->
        <div class="d-none animate__animated d-xs-block d-lg-none mb-5" id="cardIntro">
            <div class="row caption-section">
                <div class="col-lg-8">
                    <h1 class="caption-section-text">We Provide You The Best Service</h1>
                    <div class="d-lg-none d-block">
                        <img class="mobile-header-img my-3 caption-section-gambar" src="assets/repair-phone-mobile.jpg" alt="Customer Support">
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio deleniti totam incidunt dolorum. Odio adipisci dicta quae doloremque nemo ullam porro vero corrupti at voluptatem illum veniam perspiciatis, quod vitae id fuga possimus soluta ex recusandae officiis suscipit aut eligendi nobis atque. Minima maxime quo, tenetur voluptates rerum sequi optio, maiores officiis numquam inventore qui enim reprehenderit facilis praesentium! Est blanditiis, voluptatem magnam non cupiditate veniam culpa debitis laboriosam deleniti distinctio animi beatae corrupti, iste hic eos aliquid? Consectetur molestias, facilis commodi veritatis fugit quas minus quis nostrum non, accusantium laudantium in eaque, optio animi ad soluta corrupti. Ratione, ad.</p>
                    </div>
                <div class="col-lg d-none d-lg-block">
                    <img class="my-3 caption-section-gambar" src="assets/customer-support.jpg" alt="Customer Support">
                </div>
                
            </div>
        </div>


        <!-- CARD -->
        
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center align-items-stretch mt-5">
                <div class="card px-3">
                    <img src="assets/deep-clean.jpg" class="card-img-top mt-3" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Deep Clean</h5>
                        <h6 class="card-subtitle mb-2 text-muted">IDR 150000 - 200000</h6>
                        <p class="card-text mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ex reprehenderit recusandae obcaecati cumque repellendus assumenda? Labore alias odit similique.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-stretch mt-5">
                <div class="card px-3">
                    <img src="assets/Instal-Ulang.webp" class="card-img-top mt-3" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Install Ulang</h5>
                        <h6 class="card-subtitle mb-2 text-muted">IDR 100000 - 150000</h6>
                        <p class="card-text mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ex reprehenderit recusandae obcaecati cumque repellendus assumenda? Labore alias odit similique.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-stretch mt-5">
                <div class="card px-3">
                    <img src="assets/service3.jpg" class="card-img-top mt-3" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fs-1">Services</h5>
                        <h6 class="card-subtitle fs-3 mb-2 text-muted">IDR -</h6>
                        <p class="card-text mb-4 fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ex reprehenderit recusandae obcaecati cumque repellendus assumenda? Labore alias odit similique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-grid gap-2 px-5 mt-3 mb-5">
    <a class="btn btn-green" href="register.php">Repair Now</a>
    </div>

    <!-- footer -->

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

    
    
    <!-- boostrap js -->
    <?php require "bsjs.php";?>
    <script type="text/javascript">
        

        window.addEventListener('scroll',slideUp);
        function slideUp(){
            var obj = document.getElementById('cardIntro');
            if(obj.getBoundingClientRect().top<=window.innerHeight-150){
                obj.classList.remove('d-none');
                obj.classList.add('animate__fadeInDownBig','animate__slow');
            }
            else{
                for(var i=0;i<obj.length;i++){
                var wh = window.innerHeight;
                var top =obj[i].getBoundingClientRect().top;
                var point = 150;
                console.log(top);
                ob[0].classList.add('sliedUp');
                if(top<=wh - point){
                    obj[i].classList.add('slideUp');
                }
                else{
                    obj[i].classList.remove('slideUp');
                }
            }
            }
        }
    </script>
</body>
</html>