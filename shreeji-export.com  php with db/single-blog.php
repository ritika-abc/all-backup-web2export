<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from shreeji-export.com/about by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 May 2024 05:27:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
      <?php
       $con= mysqli_connect("localhost","u496524825_user_blog","Shreeji1234","u496524825_shreeji_blog");
        $slug = $_GET['slug'];
        $select = "SELECT * FROM `blog`   where `slug`='$slug'";
        $q = mysqli_query($con, $select);
        while ($row = mysqli_fetch_array($q)) {
$slug = $row['slug'];
$keyword = $row['keyword'];
$title = $row['title'];
$metadata = $row['metadata'];
}
        ?>
             
        <title><?php echo $title ?></title>
     

     
<meta name="description" content="<?php echo $metadata ?>" />
<link rel="canonical" href="https://shreeji-export.com/single-blog.php?slug=<?php echo $slug ?>" />
   <meta name="keywords" content="<?php echo $keyword ?>"  />
    <!-- All CSS -->
<link rel="stylesheet" href="frontend/css/bootstrap.min.css">
<link rel="stylesheet" href="frontend/css/animate.min.css">
<link rel="stylesheet" href="frontend/css/magnific-popup.css">
<link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
<link rel="stylesheet" href="frontend/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="frontend/css/select2.min.css">
<link rel="stylesheet" href="frontend/css/select2-bootstrap.min.css">
<link rel="stylesheet" href="frontend/css/meanmenu.css">
<link rel="stylesheet" href="frontend/css/toastr.min.css">
<link rel="stylesheet" href="frontend/css/all.css">
<link rel="stylesheet" href="frontend/css/style.css">
<link rel="stylesheet" href="frontend/css/spacing.css">
<link rel="stylesheet" href="frontend/css/cookieconsent.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- <script src='../www.google.com/recaptcha/api.js'></script> -->

<style>
    #preloader #status {
        background-image: url(uploads/preloader.gif);
    }

    .top,
    .main-nav nav .navbar-nav .nav-item .dropdown-menu,
    .video-button:before,
    .video-button:after,
    .special .read-more a,
    .service .read-more a,
    .testimonial-bg,
    .project .read-more a,
    .team-text,
    .cta .overlay,
    .blog-area .blog-image .date,
    .blog-area .read-more a,
    .newsletter-area .overlay,
    .footer-social-link ul li a,
    .scroll-top,
    .single-section .read-more a,
    .sidebar .widget .search button,
    .comment button,
    .contact-item:hover .contact-icon,
    .product-item .text button,
    .btn-arf,
    .project-photo-carousel .owl-nav .owl-prev,
    .project-photo-carousel .owl-nav .owl-next,
    .faq h4.panel-title a,
    .team-social li a:hover,
    .doc_detail_social li i,
    .nav-doctor .nav-link.active {
        background: #3867D6!important;
    }
    .main-nav nav .navbar-nav .nav-item a:hover,
    .main-nav nav .navbar-nav .nav-item:hover a,
    .service .service-item .text h3 a:hover,
    .project .project-item .text h3 a:hover,
    .blog-area .blog-item h3 a:hover,
    .footer-item ul li a:hover,
    .sidebar .widget .type-2 ul li a:hover,
    .sidebar .widget .type-1 ul li:before,
    .sidebar .widget .type-1 ul li a:hover,
    .single-section h3,
    .contact-icon,
    .product-item .text h3 a:hover,
    .career-main-item h3,
    .reg-login-form .new-user a {
        color: #3867D6!important;
    }
    .text-animated li a:hover,
    .feature .feature-item {
        background-color: #3867D6!important;
    }
    .text-animated li a:hover,
    .special .read-more a,
    .footer-social-link ul li a,
    .contact-item:hover .contact-icon,
    .faq h4.panel-title,
    .team-social li a:hover {
        border-color: #3867D6!important;
    }



    .main-nav nav .navbar-nav .nav-item .dropdown-menu li a,
    .contact-item:hover .contact-icon {
        color: #fff!important;
    }
    .feature .feature-item:hover,
    .service .read-more a:hover,
    .project .read-more a:hover,
    .blog-area .read-more a:hover,
    .single-section .read-more a:hover,
    .comment button:hover,
    .doc_detail_social li:hover i {
        background: #333!important;
    }
    .footer-social-link ul li a:hover {
        background: transparent!important;
    }
    .special .read-more a:hover {
        background: transparent!important;
        border-color: #fff!important;
    }


</style>

    <!-- Favicon -->
   <link href="logo.png" rel="shortcut icon" type="image/png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&amp;display=swap" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84213520-6"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-84213520-6');
</script>

    <script src="../cdn.websitepolicies.io/lib/cookieconsent/cookieconsent.min.js" defer></script><script>window.addEventListener("load",function(){window.wpcc.init({"colors":{"popup":{"background":"#0E050E","text":"#C8D8FF","border":"#b3d0e4"},"button":{"background":"#FFF134","text":"#0E050E"}},"position":"bottom-left","padding":"large","margin":"none","content":{"message":"This website uses cookies to ensure you get the best experience on our website.","button":"ACCEPT"}})});</script>

<!-- All JS -->
<script src="frontend/js/cookieconsent.min.js"></script>
<script src="frontend/js/jquery-3.5.1.min.js"></script>
<script src="frontend/js/bootstrap.bundle.min.js"></script>
<script src="frontend/js/jquery.magnific-popup.min.js"></script>
<script src="frontend/js/owl.carousel.min.js"></script>
<script src="frontend/js/wow.min.js"></script>
<script src="frontend/js/jquery.meanmenu.js"></script>
<script src="frontend/js/waypoints.min.js"></script>
<script src="frontend/js/jquery.counterup.min.js"></script>
<script src="frontend/js/jquery.dataTables.min.js"></script>
<script src="frontend/js/select2.full.js"></script>
<script src="frontend/js/toastr.min.js"></script>
<script src="../www.paypalobjects.com/api/checkout.js"></script>

    <style>
        .top,
        .main-nav nav .navbar-nav .nav-item .dropdown-menu,
        .video-button:before,
        .video-button:after,
        .special .read-more a,
        .service .read-more a,
        .testimonial-bg,
        .project .read-more a,
        .team-text,
        .cta .overlay,
        .blog-area .blog-image .date,
        .blog-area .read-more a,
        .newsletter-area .overlay,
        .footer-social-link ul li a,
        .scroll-top,
        .single-section .read-more a,
        .sidebar .widget .search button,
        .comment button,
        .contact-item:hover .contact-icon,
        .product-item .text button,
        .btn-arf,
        .project-photo-carousel .owl-nav .owl-prev,
        .project-photo-carousel .owl-nav .owl-next,
        .faq h4.panel-title a,
        .team-social li a:hover,
        .doc_detail_social li i,
        .nav-doctor .nav-link.active,
        .product-detail button,
        .product-detail .nav-pills .nav-link.active,
        .contact-form .btn,
        .career-sidebar .widget button {
            background: #5DB971!important;
        }
        .main-nav nav .navbar-nav .nav-item a:hover,
        .main-nav nav .navbar-nav .nav-item:hover a,
        .service .service-item .text h3 a:hover,
        .project .project-item .text h3 a:hover,
        .blog-area .blog-item h3 a:hover,
        .footer-item ul li a:hover,
        .sidebar .widget .type-2 ul li a:hover,
        .sidebar .widget .type-1 ul li:before,
        .sidebar .widget .type-1 ul li a:hover,
        .single-section h3,
        .contact-icon,
        .product-item .text h3 a:hover,
        .career-main-item h3,
        .reg-login-form .new-user a,
        .product-detail .nav-pills .nav-link {
            color: #5DB971!important;
        }
        .text-animated li a:hover,
        .feature .feature-item {
            background-color: #5DB971!important;
        }
        .text-animated li a:hover,
        .special .read-more a,
        .footer-social-link ul li a,
        .contact-item:hover .contact-icon,
        .faq h4.panel-title,
        .team-social li a:hover,
        .contact-form .btn {
            border-color: #5DB971!important;
        }



        .main-nav nav .navbar-nav .nav-item .dropdown-menu li a,
        .contact-item:hover .contact-icon,
        .product-detail .nav-pills .nav-link.active {
            color: #fff!important;
        }
        .feature .feature-item:hover,
        .service .read-more a:hover,
        .project .read-more a:hover,
        .blog-area .read-more a:hover,
        .single-section .read-more a:hover,
        .comment button:hover,
        .doc_detail_social li:hover i,
        .product-detail button:hover,
        .contact-form .btn:hover {
            background: #333!important;
        }
        .footer-social-link ul li a:hover {
            background: transparent!important;
        }
        .special .read-more a:hover {
            background: transparent!important;
            border-color: #fff!important;
        }
    </style>


</head>
<body>


<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top-contact">
                    <ul>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span>admin@shreeji-export.com</span>
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>9714857461</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="top-right">

                                        <div class="top-social">
                        <ul>
                                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                                    </ul>
                    </div>
                    
                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                    

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Start Navbar Area -->
<div class="navbar-area" id="stickymenu">

    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="#" class="logo">
            <img src="uploads/logo.png" alt="">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="uploads/logo.png" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                                                <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        
                                                <li class="nav-item">
                            <a href="about.html" class="nav-link ">About</a>
                        </li>
                        
                        
                        
                        
                        
                                                                                           <li class="nav-item">
                                        <a href="page/LIQUID_ORGANIC_FERTILIZER.html" class="nav-link">LIQUID ORGANIC FERTILIZER</a>
                                    </li>
                                                                    <li class="nav-item">
                                        <a href="page/ORGANIC_PRODUCTS.html" class="nav-link">ORGANIC PRODUCTS</a>
                                    </li>
                                                        

                                                <li class="nav-item">
                            <a href="contact.html" class="nav-link ">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="blog.php" class="nav-link ">Blog</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

    <div class="page-banner" style="background-image: url(uploads/banner_about.jpg)">
        <div class="bg-page"></div>
        <div class="text">
            <h1>About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero Start -->
    
    <!-- Hero End -->
    <!--prority-->
<div class="container  py-4">
    <div class="row">
        <?php
       $con= mysqli_connect("localhost","u496524825_user_blog","Shreeji1234","u496524825_shreeji_blog");
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
   <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-item footer-service">
                        <h2>Shreeji Agro &amp; Fertilizers</h2>
                        <ul class="fmain">
                            <li><a href="/">At Shreeji Agro &amp; Fertilizers, we&#039;re committed to transforming
                                    agriculture through innovation and sustainability.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-item footer-service">
                        <h2>Useful Links</h2>
                        <ul class="fmain">
                            <li><a href="/">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-item footer-contact">
                        <h2>Contact Information</h2>
                        <ul>
                            <li>KIM MANDVI ROAD, ARETH, GUJARAT, 394170</li>
                            <li>admin@shreeji-export.com</li>
                            <li>9714857461</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-item footer-service">
                        <h2>Social Media</h2>
                        <div class="footer-social-link">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-end">
                <div class="col-md-6">
                    <div class="copyright">
                        <p>Copyright 2022. Shreeji Agro &amp; Fertilizers All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-pages">
                        <ul>
                            <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </div>

    <script src="frontend/js/custom.js"></script>

    <script>
        //StickyHeader
        function stickyHeader() {
            var stickyScrollPos = $('#stickymenu').next().offset().top;
            if ($('#stickymenu').length) {
                if ($(window).scrollTop() > stickyScrollPos) {
                    $('#stickymenu').addClass('sticky');
                }
                else if ($(window).scrollTop() <= stickyScrollPos) {
                    $('#stickymenu').removeClass('sticky');
                }
            };
        }
        $(window).on('scroll', function () {
            stickyHeader();
        });
    </script>

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>





    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5a7c31ded7591465c7077c48/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

<!-- Mirrored from shreeji-export.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 May 2024 05:27:47 GMT -->

</html>