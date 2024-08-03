<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Foody - Organic Food Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet">

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

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top  px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 bg-white align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa-solid fa-phone me-2"></i><a href="tel:9444569966" class=""> 9444569966</a> || <a href="tel:9342595131">9342595131</a> </small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i><a href="mailto:susilprasad@yahoo.com">susilprasad@yahoo.com</a></small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0"><img src="img/logo/logo.png" height="70px" width="70px" alt="">
                </h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    
                    <div class="nav-item dropdown">
                        <a href="products.php" class="nav-link dropdown-toggle"  >products</a>
                        <div class="dropdown-menu m-0">
                        <?php
                        include "db.php";
                        $select = "SELECT * from `pro` limit 8";
                        $qu = mysqli_query($con, $select);
                        $s_no = 1;
                        while ($row = mysqli_fetch_array($qu)) {

                        ?>
                            <a href="Single-Product.php?id=<?php echo $row['id'] ?>" class="dropdown-item text-capitalize"><?php echo $row['name'] ?></a>
                           <?php }?>
                           <hr>
                           <a href="products.php" class="dropdown-item text-capitalize">View more..</a>

                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner1" style="background-image: url(./img/banner/banner.jpg);"></div>
                    <!-- <img src="./img/banner/banner1.jpg" alt=""> -->
                    <div class="carousel-caption  ">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 shadow-lg  py-4" style="background-color: rgba(255, 255, 255, 0.521);">
                                    <h1 class="display-5 mb-5 animated slideInDown">Organic vegetables Is Good For
                                        Health</h1>
                                    <a href="products.php" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Products</a>
                                    <a href="contact.php" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg2" style="background-image: url(./img/banner/banner2.jpg);"></div>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 shadow-lg  py-4 px-2" style="background-color: rgba(255, 255, 255, 0.521);">
                                    <h1 class="display-5 mb-5 animated slideInDown">A Wide Range of Products</h1>
                                    <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Products</a>
                                    <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/about.png" height="auto" width="100%">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">About us <strong class="text-success">Susil exim</strong></h1>
                    <p class="mb-4"><q>Susil exim</q> Exports is your premier destination for top-quality fruit powder
                        and fresh fruits and vegetables. With a relentless commitment to exceptional quality, we source
                        only the finest produce from trusted growers, ensuring every product meets stringent standards
                        for freshness, flavor, and nutritional value. Our diverse range of fruit powders offers a
                        variety of flavors to suit every palate, all crafted from 100% pure fruit and vegetable
                        ingredients without any additives or preservatives...
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>6 years Experience</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Our Commitment to Quality</p>
                    <p><i class="fa fa-check text-primary me-3"></i>A Wide Range of Products</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="about.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-12 col-lg-8 ">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-5 mb-3">Our Products</h1>
                        <p>Quality is at the heart of everything we do. From the moment our vegetables are harvested to
                            the time they reach your doorstep, we ensure that each product meets the highest standards
                            of freshness, taste, and nutritional value. We work closely with local farmers who share our
                            commitment to sustainable farming practices, ensuring that only the best produce makes its
                            way to our customers.</p>
                    </div>
                </div>

            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
                        include "db.php";
                        $select = "SELECT * from `pro` limit 8";
                        $qu = mysqli_query($con, $select);
                         
                        while ($row = mysqli_fetch_array($qu)) {

                        ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <a href="products.html">
                                    <div class="product-item">
                                        <div class="position-relative bg-light overflow-hidden">
                                            <img class="img-fluid w-100" style="aspect-ratio: 0 / 1;" src="<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>">
                                        </div>
                                        <div class="text-center p-4">
                                            <a class="d-block h5 mb-2" href=""><?php echo $row['name'] ?></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="text-center">
                    <a class="btn btn-primary rounded-pill py-3 px-4   m-auto mt-5" href="products.php">View More Products</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon my-5 py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Why Choose Us</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <div class="icon_box mb-3">
                            <img class="img-fluid  " src="img/icons/why-choose-1.jpg" height="50px" width="50px" alt="">
                        </div>
                        <h4 class="mb-3">Quick Support</h4>
                        <p class="mb-4">Susil exim Export, we believe in providing quick and efficient support to our
                            clients. Our dedicated customer service team is available around the clock to address any
                            inquiries, concerns, or assistance you may need.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <div class="icon_box mb-3">
                            <img class="img-fluid  " src="img/icons/why-choose-2.jpg" height="50px" width="50px" alt="">
                        </div>
                        <h4 class="mb-3">Quality Service</h4>
                        <p class="mb-4">Susil exim Food Export, quality service is ingrained in everything we do. From
                            the moment you engage with us to the delivery of our products, we prioritize your
                            satisfaction.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <div class="icon_box mb-3">
                            <img class="img-fluid  " src="img/icons/why-choose-5.jpg" height="50px" width="50px" alt="">
                        </div>
                        <h4 class="mb-3">Biologically Safe</h4>
                        <p class="mb-4">Susil exim Food Export, your satisfaction is our ultimate goal. We go above and
                            beyond to ensure that every aspect of your experience with us exceeds your expectations.
                            From the quality of our products to the</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->





    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Sustainability and Responsibility</h1>
                    <p class="text-white mb-0">At <strong> Susil exim</strong>, we recognize the importance of environmental sustainability and social responsibility. That's why we are committed to minimizing our environmental footprint and supporting local communities wherever we operate. By partnering with us, you can be confident that you are not only receiving top-quality products but also contributing to a more sustainable and equitable future.</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="about.php">Visit Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Customer Review</h1>

            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"I have been sourcing vegetables from Susil exim for my restaurant for the past year, and I couldn't be happier with the quality of their produce.."</p>
                    <div class="d-flex align-items-center">

                        <div class="mt-3 ">
                            <h5 class="mb-1 text-center">Varun</h5>

                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"The freshness and flavor of their vegetables are unmatched, and my customers have noticed the difference in the dishes we serve.."</p>
                    <div class="d-flex align-items-center">

                        <div class="ms-3">
                            <h5 class="mb-1">Vinita</h5>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"Not only is the quality top-notch, but the customer service is also excellent. "</p>
                    <div class="d-flex align-items-center">

                        <div class="ms-3">
                            <h5 class="mb-1">Ritika </h5>

                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"I highly recommend Susil exim to anyone in need of high-quality vegetables. You won't be disappointed!"</p>
                    <div class="d-flex align-items-center">

                        <div class="ms-3">
                            <h5 class="mb-1">Karan Gupta</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4"><img src="img/logo/logo.png" height="70px" width="70px" alt="logo image"></h1>
                    <p style="text-align: justify;"><a href="" class="text-white">Susil exim Exports is your premier
                            destination for top-quality fruit powder and fresh fruits and vegetables. With a relentless
                            commitment to exceptional quality, we source only the finest produce from trusted
                            growers,..</a></p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="text-lowercase"><i class="fa fa-map-marker-alt me-3"></i>632, SUNDHAR AGRO SERVICE,
                        DINDIGUL ROAD, ODDANCHATRAM, Dindigul, Tamil Nadu, 624619 , ODDANCHATRAM ,Dindigul, Tamil Nadu,
                        624619 , india</p>
                    <p><i class="fa fa-phone-alt me-3"></i> <a href="tel:9444569966">9444569966</a> || <a href="tel:9342595131">9342595131</a> </p>
                    <p><i class="fa fa-envelope me-3"></i><a href="mailto: susilprasad@yahoo.com"> susilprasad@yahoo.com</a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Products</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Social Links</h4>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Susil exim</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">

                        Designed By <a href="https://web2export.com/">web2exports</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>