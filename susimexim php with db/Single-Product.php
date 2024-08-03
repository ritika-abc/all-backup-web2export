  <?php
            include "db.php";
            $id = $_GET['id'];
            $select = "SELECT * from `pro` WHERE `id`='$id'";
            $qu = mysqli_query($con, $select);
            $s_no = 1;
            while ($row = mysqli_fetch_array($qu)) {
                $id = $row['id'];
                $kw = $row['kw'];
                $des = $row['des'];
                $title = $row['title'];
}
            ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo $kw ?>" name="keywords">
    <meta content="<?php echo $des ?>" name="description">
  <link rel="canonical" href="https://susilexim.co.in/Single-Product.php?id=<?php echo $id?>" />
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
                <h1 class="fw-bold text-primary m-0">Susil exim
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
                        <a href="products.php" class="nav-link dropdown-toggle">products</a>
                        <div class="dropdown-menu m-0">
                            <?php
                            include "db.php";
                            $select = "SELECT * from `pro` limit 8";
                            $qu = mysqli_query($con, $select);
                            $s_no = 1;
                            while ($row = mysqli_fetch_array($qu)) {

                            ?>
                                <a href="Single-Product.php?id=<?php echo $row['id'] ?>" class="dropdown-item text-capitalize"><?php echo $row['name'] ?></a>
                            <?php } ?>
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" style="background-image: -webkit-repeating-radial-gradient(#FFFFFF, #EEEEEE 5px, transparent 5px, transparent 10px);" data-wow-delay="0.1s">
        <div class="container text-center justify-content-center">
            <h1 class=" mb-3 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0 justify-content-center">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!--  -->
    <div class="container my-5">
        <div class="row bg-light py-5 shadow-lg border-bottom border-success border-4">
            <?php
            include "db.php";
            $id = $_GET['id'];
            $select = "SELECT * from `pro` WHERE `id`='$id'";
            $qu = mysqli_query($con, $select);
            $s_no = 1;
            while ($row = mysqli_fetch_array($qu)) {

            ?>
                <div class="col-12 col-md-5 my-3">

                    <div class="img_product">
                        <img src="<?php echo $row['image'] ?>" height="auto" width="100%" alt="single image">
                    </div>
                </div>
                <div class="col-12 col-md-7 my-3">
                    <div class="inner_box text-capitalize">
                        <h4><?php echo $row['name']?></h4>
                        <small><b>Price</b> : 10 rup / kg </small> <br>
                        <small><b>MOQ </b> : 250 </small>
                    </div>
                    <table class="table table-light table-hover  mt-3  ">
                        <tr>
                            <th><small>Business Type :</small></th>
                            <td>We Export</td>
                        </tr>
                        <tr>
                            <th><small>Experience :</small></th>
                            <td>6 years</td>
                        </tr>
                        <tr>
                            <th><small>Our Main Products :</small></th>
                            <td>Vegetables</td>
                        </tr>
                        <tr>
                            <th><small>Company Name :</small></th>
                            <td>Susil exim</td>
                        </tr>
                        
                    </table>
                    <!-- <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Contact us
                    </button> -->
                    <a href="contact.php" class="btn btn-primary w-25">Contact us</a>
                </div>
            <?php  } ?>
        </div>
    </div>

    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">product name</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="img/about.png" height="auto" width="50%" alt="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> -->
    <!-- products Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Explore More Products</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php
            include "db.php";
             
            $select = "SELECT * from `pro`";
            $qu = mysqli_query($con, $select);
            
            while ($row = mysqli_fetch_array($qu)) {

            ?>
                <div class="">
                    <img src="<?php echo $row['image'] ?>" height="auto" width="100%" alt="">
                </div>
                <?php }?>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Susil exim</h1>
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

                        Designed By <a href="https://web2export.com/">Web2Export</a>
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