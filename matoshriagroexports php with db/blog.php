<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About us -matoshriagroexports.com</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--<link-->
    <!--    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap"-->
    <!--    rel="stylesheet">-->
 <meta name="description" content="At Our Company, we are passionate about delivering the finest ingredients to your kitchen. With a commitment to quality and customer satisfaction, we strive to bring you the best papaya, onion, and onion powder sourced from trusted suppliers.">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="logo.png">
    <style>
        .aniamtion{
    /* animation:; */
    animation:  ani 12s infinite linear;
}

@keyframes ani{
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
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


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top py-2">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="/" class="navbar-brand  ">
                    <img class="img-fluid" height="60px" width="70px" src="img/logo.png" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link ">Home</a>
                        <a href="about.html" class="nav-item nav-link ">About</a>
                        
                         <a href="product.html" class="nav-item nav-link">Product</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                          <a href="blog.php" class="nav-item nav-link active">Blog</a>
                    </div>
                    <div class="border-start ps-4 d-none d-lg-block">
                        <div class="d-flex  ">
                            <a class="btn btn-square btn-dark rounded-circle me-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-dark rounded-circle me-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-dark rounded-circle me-2" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-dark rounded-circle me-2" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>

                    <li class="breadcrumb-item text-dark" aria-current="page">blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container mt-20 pb-20">
        
        </h3>
        <div class="row">
            <div class="col-12 col-lg-8 col-md-12 col-sm-12">
                <?php
               $con= mysqli_connect("localhost","u496524825_root_matoshria","Mmatoshriagroexports123","u496524825_matoshriagroex");

                $select = "SELECT * FROM  `blog` ";
                $q = mysqli_query($con, $select);
                while ($row = mysqli_fetch_array($q)) {


                ?>
                    <div class="card p-4 my-2">
                        <div class="row">
                            <!-- <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                                <img src="./gentelella-master/?php echo $row['image'] ?>" width="100%" height="100%">
                            </div> -->
                            <div class="col-12 ">
                                <div class="text">

                                    <h1 style="color: #000b72;" class="fs-6 text-muted"><?php echo $row['keyword'] ?> </h1>
                                    <h1 style="color: #000b72;" class="fs-4"><?php echo $row['title'] ?> </h1>

                                    <p> <?php
                                        echo $row['metadata'];
                                        ?></p>
                                </div>
                                <div class="text-start text-lg-end">
                                    <a href="single-blog.php?slug=<?php echo $row['slug'] ?>">
                                        <button style="border: none; background: linear-gradient(to right, #ff9d08, #ff5b2e); color: white;" class="p-2 mt-2">Read More </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php   } ?>
            </div>

            <div class="col-12 col-lg-4 col-md-12 col-sm-12">

                <div class="card mt-3 p-2">
                    <div class="card-header">
                        <h4>Recent Post</h4>
                    </div>
                    <?php
                  $con= mysqli_connect("localhost","u496524825_root_matoshria","Mmatoshriagroexports123","u496524825_matoshriagroex");

                    $select = "SELECT * FROM `blog` limit 3";
                    $q = mysqli_query($con, $select);
                    while ($row = mysqli_fetch_array($q)) {


                    ?>
                        <div class="card p-3 my-2">
                            <div class="row">
                                <!-- <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                                    <a href=" "><img src="./gentelella-master/?php echo $row['image'] ?>" alt=" " class="img-fluid"></a>
                                </div> -->
                                <div class="col-12  ">
                                    <div class="text">
                                    <h1 style="color: #000b72;" class="fs-6 text-muted"><?php echo $row['keyword'] ?> </h1>

                                        <h4 style="color: #000b72;" class="fs-5"><?php echo $row['title'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php   } ?>
                </div>
                
 
            </div>

        </div>
    </div>
<!-- php -->


 
<!--prority-->
<div class="container  py-4">
    <div class="row">
        <?php
      $con = mysqli_connect("localhost", "u496524825_Sshreesatyaent", "Sshreesatyaenterprises123", "u496524825_Sshreesatyaent");
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

   <!-- About End -->
<!-- Footer Start -->
 <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-primary mb-4">About Us</h3>
                  
                    
                    <p class="mb-2 " style="text-align: justify;" >Matoshri Agro Exports is your premier destination for top-quality onion powder and fresh fruits . With a relentless commitment to exceptional quality, we source only the finest produce from trusted growers, ensuring every product meets stringent ...

                    </p>
                   
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4"> Address </h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Shrikrishna Nagar, Chopda , Jalgaon ||    Maharashtra , India-425107</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i> <a href="tel:7722033615" class="">7722033615</a> || <a href="tel:9096674156" class="">9096674156</a></p>
                    <p class="mb-2 " ><i class="fa fa-envelope text-primary me-3"></i> <small> <a href="mailto:pranavpatil6556@gmail.com">pranavpatil6556@gmail.com</a>  </small> </p>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="/">Home</a>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                     
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Social links</h4>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Footer End -->
<!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium" href="#">Matoshri Agro Exports , All Right Reserved </a>
                </div>
                <div class="col-md-6 text-center text-md-end">

                    Designed By <a class="fw-medium" target="_blank" href="https://web2export.com">web2export</a>
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>