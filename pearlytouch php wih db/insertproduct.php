

<?php

include "config.php";
if (isset($_POST['submit'])) {
    $pro_name = $_POST['pro_name'];
    

    // image
    //  $_FILES is a super global variable which can be used to upload files
    $image = $_FILES["image"]["name"];
    $fld1 = "upload/" . $image;
    // $fld2 = "upload/" . $image;
    move_uploaded_file($_FILES["image"]['tmp_name'], $fld1);
    // tmp_name is the temporary name of the uploaded file which is generated automatically by php, and stored on the temporary folder on the server
    // Note: If the destination file already exists, it will be overwritten
    $sql = "INSERT INTO `pro`( `pro_name`,`image`)
     VALUES ('$pro_name','$fld1')";

    $query = mysqli_query($con, $sql);

    
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>insert page </title>
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
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link active">About</a>


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
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>

                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container my-5">
        <div class="row">
            <div class="col-7 p-3 m-auto border">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" name="pro_name" placeholder="Product Name" class="my-3 form-control">
                  
                   
                        <input class="form-control" name="image" type="file"  >
                    
                    <!-- <input type="text" name="pro_name" placeholder="Product Name" class="my-3 form-control"> -->
                    <input type="submit" name="submit" class="my-3 btn btn-success">
                </form>
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