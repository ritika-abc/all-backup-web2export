<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home -pearlytouch</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap"
        rel="stylesheet"> -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="index.php" class="navbar-brand  ">
                    <img src="img/logo/logo.png" height="80px" width="110px" class="" alt="">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"  >
                                Product
                            </a>
                            <ul class="dropdown-menu">
                            <?php
                                include_once "config.php";
                                $sel = "SELECT * from `pro`  ";
                                $qu = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($qu)) {
                                ?>
                                <li><a class="dropdown-item text-capitalize" href="product.php?pro_id=<?php echo $row['pro_id'] ?>"><?php echo $row['pro_name'] ?></a></li>
                                 <?php  }?>
                            </ul>
                        </li>
                    </div>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h3 class="fw-light text-white animated slideInRight">Natural & Organic</h3>
                    <h1 class="display-4 text-white animated slideInRight">Soap is to the body what laughter is to the soul.</h1>

                    <!-- <a href="" class="btn btn-dark py-2 px-4 me-3 animated slideInRight">Shop Now</a> -->
                    <a href="contact.php" class="btn btn-outline-dark py-2 px-4 animated slideInRight">Contact Us</a>
                </div>
                <div class="col-lg-6 text-center">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="row g-4">
                                <div class="carousel-item active text-center">
                                    <img src="upload/redwine.jpg" class="d-block w-50 m-auto" alt="...">
                                </div>
                                <?php
                                include_once "config.php";
                                $sel = "SELECT * from `pro`  LIMIT 8";
                                $qu = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($qu)) {
                                ?>

                                    <div class="carousel-item   text-center">
                                        <img src="<?php echo $row['image'] ?>" class="d-block w-50 m-auto" alt="...">
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- <img class="img-fluid animated pulse infinite" src="img/product/1.png" height="auto" width="60%"
                        alt=""> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Feature Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <img src="img/icon/icons8-export-50.png" height="50px" width="50px" alt="">
                            <h5 class="text-white mb-0 mt-2">We Export Soaps
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <img src="img/icon/icons8-manufacture-50.png" height="50px" width="50px" alt="">
                            <h5 class="text-white mb-0 mt-2">We Manufacture Soaps
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <img src="img/icon/icons8-supply-50.png" height="50px" width="50px" alt="">
                            <h5 class="text-white mb-0 mt-2">We Supply Soaps
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn text-center" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="img/aboutus.jpg" height="auto" width="90%">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="text-primary mb-4">ABOUT US </h1>
                    <p class="mb-4">Welcome to our collection of plastic-free, nature-friendly organic handmade soaps with exquisite fragrances. These organic soaps are carefully handcrafted with high-quality natural ingredients to make them gentle on your skin and gentler on the environment. </p>
                    <p class="mb-4">Say hi to <strong>Pearly touch's</strong> range of organic, natural, and handmade soaps and bid adieu forever to harsh chemicals.</p>
                    <h6> Raw Material We Used :
                    </h6>
                    <ul class="">
                        <li>Olive oil</li>
                        <li>Coconut oil</li>
                        <li>Lye</li>
                    </ul>
                    <a class="btn btn-primary py-2 px-4" href="about.php">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->











    <!-- Product Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3">LATEST PRODUCTS</h1>

            </div>
            <!-- #f8f8f8 -->
            <div class="row g-4">
                <?php
                include_once "config.php";
                $sel = "SELECT * from `pro`  LIMIT 8";
                $qu = mysqli_query($con, $sel);
                while ($row = mysqli_fetch_array($qu)) {
                ?>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                        <!-- <a href="product.php?pro_id=?php echo $row['pro_id'] ?>" class="d-block"> -->
                        <div class="product-item text-center border h-100 p-4">
                            <a href="product.php?pro_id=<?php echo $row['pro_id'] ?>" class="h6 d-inline-block mb-2 text-capitalize">
                                <img class="img-fluid mb-4" src="<?php echo $row['image'] ?>" height="auto" width="50%" alt="">
                            </a>
                            <h4 class="text-capitalize "><?php echo $row['pro_name'] ?> </h4>
                            <div class="product_box text-start my-3 border-top">
                                <small class="mt-2"> <b>Brand Name</b> : Pearly Touch</small> <br>
                                <small> <b>Packaging Type</b> : Pearly Touch</small> <br>
                                <small> <b>Weight</b>: 100gm</small> <br>
                                <small> <b>Country of Origin</b>: India</small> <br>
                                <a class="btn btn-primary  mt-3  w-100 " href="contact.php">Enquiry Now</a>

                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary py-2  text-center px-4" href="product.php">View More Products...</a>
            </div>
        </div>
    </div>
    <!-- Product End -->









    <div class="container-fluid newsletter bg-primary py-5 my-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3"> Contact Us</h1>
                <p class="text-white mb-4">If interested in our lavish range,kindly connect</p>
                <a class="btn btn-primary py-2 px-4" href="contact.php">Contact Us</a>

            </div>

        </div>
    </div>



    <!-- Footer Start -->
    <div class="container-fluid bg-white footer">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.php" class="d-inline-block mb-3">
                        <img src="img/logo/logo.png" alt="">
                    </a>
                    <p class="mb-0" style="text-align: justify;">Welcome to our collection of plastic-free, nature-friendly organic handmade soaps with exquisite fragrances. These organic soaps are carefully handcrafted with high-quality natural ingredients to make them gentle on your skin and gentler on the environment.</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>N.6, Ashok Nagar, Rettavaikkal,
                        Uyyakondanmalai,Trichy,Tamilnadu,India-620102
                    </p>
                    <p><a href="tel:9344517609" style="color: #17312e;"><i class="fa fa-phone-alt me-3"></i>+9344517609</a>
                    </p>
                    <p><a href="mailto:divinemagicpt520@gmail.com" style="color: #17312e;"><i class="fa fa-envelope me-3"></i>divinemagicpt520@gmail.com</a>
                    </p>
                    <p><a href="mailto:delphinarputharaj2023@gmail.com" style="color: #17312e;"><i class="fa fa-envelope me-3"></i><small>delphinarputharaj2023@gmail.com</small></a>

                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="mb-4">Our Products</h5>
                    <?php
                    include_once "config.php";
                    $sel = "SELECT * from `pro`  LIMIT 5";
                    $qu = mysqli_query($con, $sel);
                    while ($row = mysqli_fetch_array($qu)) {
                    ?>
                        <a class="btn btn-link text-capitalize" href="product.php"><?php echo $row['pro_name'] ?></a>
                    <?php  } ?>
                    <a class="btn btn-link" href="product.php">View More...</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="index.php">Home</a>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Pearly Touch</a>, All Right Reserved.


                        Designed By <a class="border-bottom me-auto" href="https://web2export.com/">Web2export</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>