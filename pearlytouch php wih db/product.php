<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us -pearlytouch</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap" rel="stylesheet">

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
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"  >
                                Product
                            </a>
                            <ul class="dropdown-menu">
                            <?php
                                include_once "config.php";
                                $sel = "SELECT * from `pro`";
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
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <?php
                    $pro_id = $_GET['pro_id'];
                    include_once "config.php";
                    $sel = "SELECT * from `pro` where `pro_id`='$pro_id'";
                    $qu = mysqli_query($con, $sel);
                    while ($row = mysqli_fetch_array($qu)) {
                    ?>
                        <li class="breadcrumb-item text-white active text-capitalize" aria-current="page"><?php echo $row['pro_name'] ?></li>
                    <?php } ?>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container py-5">
        <div class="row">
            <?php
            $pro_id = $_GET['pro_id'];
            include_once "config.php";
            $sel = "SELECT * from `pro` where `pro_id`='$pro_id'";
            $qu = mysqli_query($con, $sel);
            while ($row = mysqli_fetch_array($qu)) {
            ?>
                <div class="col-12 col-md-6 my-2 text-center  ">
                    <img src="<?php echo $row['image'] ?>" height="auto" width="50%" alt="">
                </div>
                <div class="col-12 col-md-6 my-2">
                    <p class=" display-6   text-capitalize"><?php echo $row['pro_name'] ?></p>
                    <h6>Price :300</h6>
                    <h6>MOQ : 100 Piece</h6>
                    <table class="table table-hover table-bordered mt-5">
                        <tr>
                            <th>Company Name </th>
                            <td>Pearly Touch</td>
                        </tr>
                        <tr>
                            <th> Establishment Year </th>
                            <td>2024, January </td>
                        </tr>
                        <tr>
                            <th> Experience </th>
                            <td>7 yrs </td>
                        </tr>
                        <tr>
                            <th> Area </th>
                            <td>Trichy, Erode, Dindigul and Pudhukottai </td>
                        </tr>
                        <tr>
                            <th> Packaging Material </th>
                            <td>wooden and rigid boxes </td>
                        </tr>
                    </table>
                    <img src="img/img menu.jpg" class="mt-3" height="auto" width="100%" alt="">

                </div>
               
                <!-- <div class="col-6">
                    <img src="img/img menu.jpg" class="mt-3" height="auto" width="100%" alt="">

                </div> -->
            <?php  } ?>
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