    <?php
      include "config.php";
        $slug = $_GET['slug'];
        $select = "SELECT * FROM `blog`   where `slug`='$slug'";
        $q = mysqli_query($con, $select);
        while ($row = mysqli_fetch_array($q)) {
            
            $keyword=$row['keyword'];
            $title=$row['title'];
            $metadata=$row['metadata'];
            $slug=$row['slug'];
}

        ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/vendars/bootstrap-5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/vendars/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendars/OwlCarousel2-2.3.4/dist/assets/owl.theme.green.css">
    <!-- script owl  -->
   
    <script src="assets/vendars/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
<meta name="description" content="Discover the tropical allure of coconut delights on our vibrant home page. Dive into a world of coconut-infused goodness, from recipes to wellness tips, and indulge in nature's bounty.">
 
    <script src="assets/vendars/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo.jpg">
    
     <link rel="canonical" href="https://vistaraenterprise.com/single-blog.php?slug=<?php echo $slug ?>" />
    <meta name="description" content="<?php echo $metadata ?>">
 
    <meta name="keywords" content="<?php echo $keyword ?>" />
    <style>
        .inner_box_icon {
            height: 60px;
            width: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #d31f26;
            overflow: hidden;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <!-- header start here -->
    <header>
        <!-- top nav -->
        <nav class="nav nav d-none d-sm-none d-md-flex">
            <li class="nav-item"><a href="milto:connectvistara@gmail.com" class="nav-link"><i class="fa-regular mx-2 fa-envelope"></i>
                    connectvistara@gmail.com</a></li>
            <li class="nav-item "><a href="tel:8668127970" class="nav-link"><i class="fa-solid fa-phone mx-2"></i>+91 8668127970</a>
            </li>
            <li class="nav-item ms-auto"><a href="" class="nav-link"><i class="fa-brands fa-facebook"></i></a></li>
            <li class="nav-item"><a href="" class="nav-link"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="nav-item"><a href="" class="nav-link"><i class="fa-brands fa-youtube"></i></a></li>
        </nav>

    </header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!--""Vistara Enterprise"" -->
                <div class="img">
                    <img src="assets/image/logo_green.jpg" height="80px" width="100px" alt="logo">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="nav_links">
                    <li class="nav-item mx-3">
                        <a class="nav-link text-warning active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="about.php">about</a>
                    </li>
                   
                    <li class="nav-item mx-3">
                        <a class="nav-link " href="contact.php">contact us</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link " href="product.php">product  </a>
                    </li>
                     <li class="nav-item mx-3">
                        <a class="nav-link " href="blog.php">blogs  </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header end here -->
    <!-- bg image -->

    <!-- Hero Start -->
    
    <!-- Hero End -->
    
<!-- single-page.php -->
  <!-- Hero Start -->
  <div class="container-fluid hero-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-header-inner animated zoomIn">
                    <h1 class="display-1 mb-5 text-dark">Blog</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
<!-- About Satrt -->

<!-- About End -->
<!--prority-->
<div class="container  py-4">
    <div class="row">
        <?php
      include "config.php";
        $slug = $_GET['slug'];
        $select = "SELECT * FROM `blog`   where `slug`='$slug'";
        $q = mysqli_query($con, $select);
        while ($row = mysqli_fetch_array($q)) {


        ?>
            <div class="col-lg-12">
                <h1 class="text-center my-5 display-5 text-warning"><?php echo $row['keyword'] ?></h1>
                <hr>
                <?php
                echo $row['message'];
                ?>
            </div>
        <?php } ?>
    </div>

</div>
<!--  -->



    </div>

     <!-- footer start here -->
    <footer class="p-5" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                    <div class="foot_text">
                        <h4 class="text-warning">"Vistara Enterprise" </h4>
                        <p class="mt-3" style="text-align: justify;"><a href="about.php" class=" text-white text-decoration-none">At <strong class="text-warning"><q>Vistara Enterprise</q> </strong>   , we bring you a world of flavor with our exquisite range of spices sourced from the finest regions across the globe </a> </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                    <h4 class="text-warning">Useful Links</h4>
                    <ul class="navbar-nav mt-3 text-capitalize">
                        <li class="nav-item"><a href="/" class="nav-link p-0"> <i
                                    class="fa-solid fa-check mx-1"></i>
                                home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link p-0"> <i
                                    class="fa-solid fa-check mx-1"></i>
                                about</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link p-0"> <i
                                    class="fa-solid fa-check mx-1"></i>
                                    contact us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                    <h4 class="text-warning">Contact Information</h4>
                    <ul class="navbar-nav mt-3">
                        <li class="nav-item "><a href="" class="nav-link p-0 fw-bold"><i
                            class="fa-solid fa-building-wheat mx-1 "></i>Address: Vistara enterprise 7/3 Ayyanar kovil Road, Opposite to Thadco colony, Rajapalayam, Virudhunagar District, Tamilnadu -626117
                    </a></li>
                        <li class="nav-item mt-2"><a href="milto:connectvistara@gmail.com" class="nav-link p-0"><i
                                    class="fa-regular fa-envelope mx-1"></i> connectvistara@gmail.com</a></li>
                        <li class="nav-item mt-2"><a href="tel:8668127970" class="nav-link p-0"><i class="fa-solid fa-phone mx-1"></i>
                            +91 8668127970</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                    <h4 class="text-warning">Social links</h4>

                    <div class="foot_icon_box d-flex mt-4">
                        <div class="foot_icon bg-warning  mx-1">
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                        <div class="foot_icon bg-warning  mx-1">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                        <div class="foot_icon bg-warning  mx-1">
                            <i class="fa-brands fa-youtube"></i>
                        </div>

                    </div>
                                        <a href="TRUST SEAL VISTARA (1).pdf" target="_blank" class="mt-3 d-block"> <img src="trust.jpg" height="100px" width="100px" alt="trust"></a>

                </div>
            </div>
        </div>
        <div class="border-top d-block border-white"></div>

        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <ul class="d-flex list-unstyled">
                        <li class="nav-item  "><a href="" class="nav-link">Copyright 2024."Vistara Enterprise"|| web2export
                                All Rights Reserved.</a></li>
                        <li class="nav-item mx-3 ms-auto"><a href="" class="nav-link"><img src="" alt=""></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="icon_box_call fixed-bottom px-2 pb-5" style="z-index: 30;">
        <a href="tel:8668127970" class="inner_box_icon    text-decoration-none">
            <i class="fa-solid fa-phone fs-3 fa-beat text-white "></i>
        </a>
    </div>
    <!-- <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    }
                }
            })
        })
    </script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    <script src="assets/vendars/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>