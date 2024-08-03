<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GrowMark - Digital Marketing HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .bg1 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.596), rgba(0, 0, 0, 0.568)), url("img/banner/1.jpg") !important;
            height: 60vh;
            width: 100%;
            background-size: cover;

        }

        .bg2 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.596), rgba(0, 0, 0, 0.568)), url("img/banner/2.jpg") !important;
            height: 60vh;
            width: 100%;
            background-size: cover;

        }

        .about {
            background: linear-gradient(rgba(0, 0, 0, 0.753), rgba(0, 0, 0, 0.658)), url(img/banner/2.jpg) left center no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        .bg-primary {
    background-color:#9f1010 !important;
}
.btn-primary {
    color: #fff;
    background-color: #9f1010;
    border-color: #9f1010;
}
.btn-outline-primary {
    color: #9f1010;
    border-color: #9f1010;
}
.btn-outline-primary:hover {
  background: #9f1010;
  color:white;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
     
    background-color: #9f1010;
    border: 15px solid #9f1010;
}
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.php">
                    <img src="img/logo/logo.jpg" height="100px" width="100%" alt="">

                </a>
                <div class="ms-auto d-flex align-items-center px-2">
                    <!-- <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>TAZA PAPAD PRODUCTS TALTALA, CHAMRAIL HOWRAH,WEST BENGAL(711114)</small> -->
                    <marquee behavior="" class="text-lowercase w-50" direction="">
                        TAZA PAPAD PRODUCTS TALTALA, CHAMRAIL HOWRAH,WEST BENGAL(711114)
                    </marquee>
                    <small class="ms-auto "><i class="fa fa-envelope me-3"></i><a href="mailto:tazapapad@gmail.com"
                            class="text-white">tazapapad@gmail.com</a></small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i><a href="tel:9748710576"
                            class="text-white">9748710576</a></small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.php" class="navbar-brand d-lg-none">
                    <img src="img/logo/logo.jpg" height="100px" width="100%" alt="">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>


                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Product</a>
                            <div class="dropdown-menu bg-light rounded-0 text-capitalize rounded-bottom m-0">
                                <?php
                                include "db.php";
                                // $id = $_GET['id'];
                                $sel = "SELECT * FROM `pro` ";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {


                                ?>
                                    <a href="single-product.php?id=<?php echo $row['id'] ?>" class="dropdown-item"><?php echo $row['name']?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn about" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
           
                    <li class="breadcrumb-item text-primary text-white" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Contact Us</p>
                <h1 class="display-5 mb-5">Get in Touch</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Get in Touch</h3>
                    <p class="mb-4">Have a question, suggestion, or just want to say hello? We’d love to hear from you! Drop us a message using the form below, and we'll get back to you as soon as possible.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-4">Contact Details</h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Our Office</h6>
                            <span>TAZA PAPAD PRODUCTS TALTALA, CHAMRAIL HOWRAH,WEST BENGAL(711114)</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Call Us</h6>
                            <span>+91 9748710576</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Mail Us</h6>
                            <span>tazapapad@gmail.com</span>
                        </div>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721954.36223929!2d85.21029177313281!3d24.35620757575322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fa16ff1397e887%3A0x71543a3dc3e7a20a!2sWest%20Bengal!5e0!3m2!1sen!2sin!4v1717054309255!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


      <!-- Footer Start -->
      <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">About Us</h4>
                    <p style="text-align: justify;">Taza Papad Products was established in the year 1990 in West Bengal.
                        Over the years Taza Papad Products has been successful in becoming.. </p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Products</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>TAZA PAPAD PRODUCTS TALTALA, CHAMRAIL
                        HOWRAH,WEST BENGAL(711114)</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>tazapapad@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>9748710576</p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Links</h4>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">Tazapapad Exim</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">

                    Designed By <a class="fw-medium text-light" href="https://web2export.com">web2export.com</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>