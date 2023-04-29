<?php

session_start();
include("connection.php");



// get users redeem request

$sel_ads = mysqli_query($con, "SELECT p_id, prod_image, name FROM products");

if (!$sel_ads) {
    die("Error executing query: " . mysqli_error($con));
} else {
    $row_ads_count = mysqli_num_rows($sel_ads);
}


$catData = mysqli_query($con, "SELECT c_id, name FROM categories");

if (!$catData) {
    die("Error executing query: " . mysqli_error($con));
} else {
    $row_ads_count2 = mysqli_num_rows($catData);
}
?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zwin.io/html/jozicular/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 06:27:27 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jozicular - Bio Science HTML Template</title>
    <!-- favicon -->
    <link rel=icon href="favicon.png" sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Nice-select -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- slick carousel  -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">


    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .cat-image {
            max-width: 200px;
        }
    </style>
</head>

<body>

    <div>

    </div>
</body>
<!--============= preloader area start here ===============-->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!--============= preloader area end here ===============-->

<!--============= Nav Area start here ===============-->
<div class="total-content">
    <div class="header-section">
        <!-- search Popup -->
        <div class="body-overlay" id="body-overlay"></div>
        <div class="search-popup" id="search-popup">
            <form action="#" class="search-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search.....">
                </div>
                <button class="submit-btn border-none"><i class=" flaticon-search"></i></button>
            </form>
        </div>
        <!-- Popup Section -->
        <!--info-popup start-->
        <div class="info-popup"></div>
        <div class="info-popup-wrapper">
            <div class="info-popup-content">
                <button type="button" class="info-popup-content_close"><i class="flaticon-close"></i></button>
                <div class="row no-gutters">
                    <div class="col-lg-7">
                        <div class="info-popup-content__img info-popup-content__img--one">
                            <img src="assets/img/popup/2.png" alt="">

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="info-popup-content__text">
                            <div class="info-popup-content__img">
                                <img src="assets/img/popup/3.png" alt="">
                            </div>
                            <div class="info-popup-content__text-header">
                                <h5 class="info-popup-content__title">Opening Hours</h5>
                            </div>
                            <div class="info-popup-content__text-body">
                                <p class="info-popup-content__text-is">moday - sunday</p>
                                <p class="info-popup-content__text-is">8.00 am - 9.00 pm</p>
                            </div>
                            <div class="info-popup-content__text-footer">
                                <p class="info-popup-content__text-is">+89046723901</p>
                                <p class="info-popup-content__text-is">example@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--location-popup start-->
        <div class="location-popup"></div>
        <div class="location-popup-wrapper">
            <div class="location-popup-content">
                <button type="button" class="location-popup-content_close"><i class="flaticon-close"></i></button>
                <div class="row no-gutters">
                    <div class="col-lg-7">
                        <div id="map-two">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14608.271103099609!2d90.36059233036049!3d23.74496240347118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgoogle%20map!5e0!3m2!1sen!2sbd!4v1571636420588!5m2!1sen!2sbd" style="border:0;" class="total-map" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="location-popup-content__text">
                            <div class="location-popup-content__img">
                                <img src="assets/img/popup/1.png" alt="">
                            </div>
                            <div class="location-popup-content__text-header">
                                <h5 class="location-popup-content__title">Address</h5>
                            </div>
                            <div class="location-popup-content__text-body">
                                <span class="location-popup-content__text-is">
                                    Collins Street West 8007, <br> San Fransico, United States.
                                </span>
                            </div>
                            <div class="btn-wrapper">
                                <button class="boxed-btn" type="button">Open Map</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--message-popup start-->
        <div class="message-popup"></div>
        <div class="message-popup-wrapper">
            <div class="message-popup-content">
                <button type="button" class="message-popup-content_close"><i class="flaticon-close"></i></button>
                <div class="row no-gutters">
                    <div class="col-lg-7">
                        <div class="message-popup-content__img message-popup-content__img--one">
                            <img src="assets/img/popup/4.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="message-popup-content__text">
                            <div class="info-popup-content__img">
                                <img src="assets/img/popup/5.png" alt="">
                            </div>
                            <div class="message-popup-content__text-header">
                                <h3 class="message-popup-content__title mb-3">
                                    You have a question for us?
                                </h3>
                                <h6 class="message-popup-content__title mb-3">
                                    please Mail On This Mail ID
                                </h6>
                            </div>
                            <div class="message-popup-content__text-body">
                                <h5 class="message-popup-content__title mb-3">
                                    Email:xyz@gmail.com
                                </h5>
                                <!-- <form class="popup-form" action="http://zwin.io/html/jozicular/index.html">
                                        <div class="form-group">
                                            <input id="email-two-popup" type="text" class="form-control"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="1"
                                                placeholder="Your Message"></textarea>
                                        </div>
                                        <div class="btn-wrapper padding-top-20">
                                            <button class="boxed-btn" type="button">Send</button>
                                        </div>
                                    </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <nav class="navbar navbar-area navbar-expand-lg nav-style-01 nav-absolute">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo-wrapper d-none d-lg-block">
                        <a href="index.html" class="logo">
                            <img src="assets/img/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="logo-wrapper d-block d-lg-none">
                        <a href="index.html" class="logo">
                            <img src="assets/img/logo/logo2.png" alt="logo">
                        </a>
                    </div>


                    <div class="mobile-toggler">
                        <a data-toggle="modal" data-target="#login-modal" href="#"><i class="flaticon-user-1"></i></a>
                    </div>
                    <button class="navbar-toggler cross-menu" type="button" data-toggle="collapse" data-target="#lifeomic_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="cross-menu-wrapper">
                            <span class="bar1"></span>
                            <span class="bar2"></span>
                            <span class="bar3"></span>
                        </span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="lifeomic_main_menu" style="color:linear-gradient(to right top, #ff00ff, #ce0af0, #9c11df, #6914cb, #2615b6);">
                    <ul class="navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <!-- <ul class="sub-menu">
                                    <li class="active-sub-menu"><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul> -->
                        </li>
                        <!-- <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="partner.html">Partner</a>
                                    </li>
                                    <li><a href="team.html"> Our Team</a>
                                    </li>
                                    <li><a href="faq.html">Faq</a>
                                    <li><a href="error.html">Error</a>
                                    </li>
                                </ul>
                            </li> -->
                        <!-- <li class="menu-item-has-children"><a href="#">Career</a>
                                <ul class="sub-menu">
                                    <li><a href="career.html">Career</a></li>
                                    <li><a href="job-description.html">Job Description</a></li>
                                </ul>
                            </li> -->
                        <li><a href="research-development.html">Research Details</a>
                            <!-- <li class="menu-item-has-children"><a href="research-development.html">Research</a>
                                <ul class="sub-menu">
                                    <li><a href="research-development.html">Research & Development</a></li>
                                    <li><a href="research-details.html">Research Details</a></li>
                                    <li><a href="product-pipeline.html">Product Pipeline</a></li>
                                    <li><a href="investor.html">Invester</a></li>
                                    <li><a href="scientific-platform.html">Scientific Platform</a></li>
                                </ul>
                            </li> -->
                        <li class="menu-item-has-children"><a href="product.php">Products</a>
                            <ul class="sub-menu">
                           
                            <?php

                    if ($row_ads_count2 >= 1) {

                        while ($rowP = mysqli_fetch_array($catData)) {

                            $c_id = $rowP['c_id'];
                            $name = $rowP['name'];
                    ?>
                            
                                <li><a href="CardiacRange.php?c_id=<?php echo $c_id; ?>"><?php echo $name;?></a></li>
                                <?php }
                    }
                    ?>


                                <li><a href="product-details.php">Product Details</a></li>
                                <!-- <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li> -->
                            </ul>
                        </li>
                        <li><a href="about-us.html">About Us</a>
                            <!-- <ul class="sub-menu">
                                    <li class="menu-item-has-children"><a href="#">Masonry</a>
                                        <ul class="sub-menu">
                                            <li><a href="news.html">Style one</a></li>
                                            <li><a href="news-1.html">Style two</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="news-2.html">Without Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="news-2.html">Style one</a></li>
                                            <li><a href="news-3.html">Style two</a></li>
                                        </ul>


                                    </li>
                                    <li class="menu-item-has-children"><a href="news-4.html">Default Layout</a>
                                        <ul class="sub-menu">
                                            <li><a href="news-4.html">Style one</a></li>
                                            <li><a href="news-5.html">Style two</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="news-details.html">News Details</a></li>
                                </ul> -->
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-right-content">
                    <ul>
                        <!-- <li class="login">
                                <a data-toggle="modal" data-target="#login-modal" href="#">Log In /</a>
                            </li>
                            <li class="singup"><a data-toggle="modal" data-target="#singup-modal" href="#">Sing Up</a>
                            </li> -->
                        <li class="search" id="search">
                            <i class="flaticon-search"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--SingUp Modal -->
    <!-- <div class="login-modal modal fade" id="singup-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-custom" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="flaticon-close"></i>
                        </button>
                        <div class="login-form-section">
                            <div class="container padding-0">
                                <div class="row padding-0">
    
                                    <div class="col-md-6 padding-0">
                                        <div class="login-section grd-bg">
                                            <div class="login-back">
                                                <div class="login-content">
                                                    <h2 class="title">Welcome back </h2>
                                                    <p>To keep connected with us please login with your personal info
                                                    </p>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <button class="boxed-btn" type="submit"><span>Sign In</span> </button>
                                                </div>
                                                <div class="img-wrap padding-top-50">
                                                    <img src="assets/img/signup-login/dfoctor.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="reg-section">
                                            <form class="login-form" action="http://zwin.io/html/jozicular/index.html">
                                                <h2 class="title padding-bottom-30">Create account</h2>

                                                <div class="form-group">
                                                    <label for="name-form">Username or Email</label>
                                                    <input id="name-form" type="text" class="form-control"
                                                        placeholder="Username or Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email-four">Email</label>
                                                    <input id="email-four" type="text" class="form-control"
                                                        placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password-four">Password</label>
                                                    <input id="password-four" type="password" class="form-control"
                                                        placeholder="Password">
                                                </div>
                                                <div class="btn-wrapper">
                                                    <button class="boxed-btn" type="submit">Sign Up</button>
                                                </div>
                                                <br>
                                                <p>Or</p>
                                                <div class="social-icon ">
                                                    <ul class="social-share">
                                                        <li class="fb"><a href="#"><i class="flaticon-facebook"></i>
                                                                Sign in with facebook</a></li>
                                                        <li class="ggl"><a href="#">
                                                                <img src="assets/img/icon-img/2.png" alt=""> Sign in
                                                                with google
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!--Login Modal -->
    <!-- <div class="login-modal modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-custom" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close style-2" data-dismiss="modal" aria-label="Close">
                            <i class="flaticon-close"></i>
                        </button>
                        <div class="login-form-section">
                            <div class="container padding-0">
                                <div class="row padding-0">
                                    <div class="col-lg-6 padding-0">
                                        <div class="login-section bg-grey">
                                            <form class="login-form" action="http://zwin.io/html/jozicular/index.html">
                                                <h2 class="title margin-bottom-35">Log In</h2>

                                                <div class="form-group">
                                                    <label for="email-three">Username or Email</label>
                                                    <input id="email-three" type="text" class="form-control"
                                                        placeholder="Username or Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password-three">Password</label>
                                                    <input id="password-three" type="password" class="form-control"
                                                        placeholder="Password">
                                                </div>
                                                <a href="#" class="forget-btn">Forget password ? </a>
                                                <div class="btn-wrapper">
                                                    <button class="boxed-btn" type="submit"><span>LOG IN</span> </button>
                                                </div>
                                            </form>

                                            <div class="social-icon light-bg">
                                                <ul class="social-share ">
                                                    <li class="fb"><a href="#"><i class="flaticon-facebook"></i> Sign in
                                                            with facebook</a></li>
                                                    <li class="ggl"><a href="#">
                                                            <img src="assets/img/icon-img/2.png" alt=""> Sign in with
                                                            google
                                                        </a></li>
                                                </ul>
                                                <div class="new-user padding-top-30">
                                                    <h6>New User ?</h6>
                                                    <a href="#">Create a new account</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-none d-lg-block padding-0">
                                        <div class="reg-section bg-grey">
                                            <div class="login-back">
                                                <div class="img-wrap padding-bottom-50">
                                                    <img src="assets/img/signup-login/sign-in.png" alt="">
                                                </div>
                                                <div class="login-content">
                                                    <h4 class="title">Hi Dear ? Sign up to join us</h4>
                                                </div>
                                                <div class="btn-wrapper ">
                                                    <button class="boxed-btn" type="submit"><span>SIGN UP</span> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
</div>
<!--============= Nav Area End here ===============-->

<!--============= breadcrumb start here ===============-->
<div class="breadcrumb-area shop-area-breadcrumb">
    <div class="nav-container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
                <div class="breadcrumb-inner dark-blue">
                    <h2 class="page-title">product's</h2>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Products</li>
                    </ul><!-- .breadcrumbs -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--============= breadcrumb end here ===============-->

<!--============= shop area start here ===============-->
<section class="shop-area padding-top-120 md-pd-top-80 padding-bottom-85 md-pd-bottom-80">
    <div class="nav-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 margin-bottom-30">
                        <!-- <div class="product-sorting">
                                <div class="sorting-title">
                                    <h5 class="title">Sort by latest :</h5></div>
                                <div class="select-option">
                                    <select>
                                        <option data-display="Sort by lates" value="1">Sort by lates</option>
                                        <option value="2">Sort by Names</option>
                                        <option value="3">Sort by Sell</option>
                                        <option value="4">Sort by reviews</option>
                                    </select>
                                </div>
                            </div> -->
                    </div>
                </div>
                <div class="row">

                    <?php

                    if ($row_ads_count >= 1) {

                        while ($rowP = mysqli_fetch_array($sel_ads)) {

                            $p_id = $rowP['p_id'];
                            $prod_image = $rowP['prod_image'];
                            $name = $rowP['name'];
                    ?>
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="product-single-item">
                                    <div class="product-img">

                                        <img src="<?php echo $rowP['prod_image'] ?>" alt="">
                                        
                                        <div class="overlay">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="flaticon-shopping-cart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="flaticon-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-product-description">
                                        <h5 class="title"><a href="product-details.php?p_id=<?php echo $p_id; ?>"><?php echo $name; ?><?php echo $p_id; ?></a></h5>
                                        <div class="star-ratings ">
                                            <i class="flaticon-star "></i>
                                            <i class="flaticon-star "></i>
                                            <i class="flaticon-star "></i>
                                            <i class="flaticon-star "></i>
                                            <i class="flaticon-star "></i>
                                        </div>
                                        <div class="price-box">
                                            <h5 class="price">
                                                <span class="sale-price">$140.00</span>
                                            </h5>
                                        </div>

                                    </div>
                                </div>
                            </div>

                     <?php 
                     } 
                     
                        }?>       
                               
                </div>
            </div>
        
        </div>


   
    <tr>
        <td colspan="9" style="text-align:center;"> No Records Found !</td>
    </tr>


    </div>

    <!-- sidebar_widget started here -->
    <div class="col-lg-4 md-pd-top-20">
        <div class="widget-area">

            <!-- search-widget  -->
            <div class="widget widget_search sidebar_widget border-bottom">
                <form class="search-form  ">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button class="submit-btn" type="submit"><i class="flaticon-search"></i></button>
                </form>
            </div>

            <!-- Categories widget  -->
            <div class="widget widget_categories style-2 sidebar_widget">
                <h5 class="widget-title">Catagories</h5>
                <ul>
                    <li class="active"><a href="#">medicnes(20)</a></li>
                    <li><a href="#">Medicate Scissors(10)</a></li>
                    <li><a href="#">Protective Eyewear(05)</a></li>
                    <li><a href="#">Reflex Hammer(14)</a></li>
                    <li><a href="#">Vitamin & Supplements(22)</a></li>
                    <li><a href="#">Medicated Skin Care(15)</a></li>
                    <li><a href="#">Uncategorized(02)</a></li>
                </ul>
            </div>

            <!-- cart widget  -->
            <div class="widget widget_cart sidebar_widget border-bottom">
                <h5 class="widget-title">Cart</h5>
                <p>
                    No product in the cart
                </p>
            </div>


            <!-- Instagram widget  -->

            <div class="widget  sidebar_widget ">
                <h5 class="widget-title">Instagram</h5>
                <div class="instagram-images">
                    <div class="img-wrapper">
                        <img src="assets/img/sidebar/insta1.png" alt="">
                    </div>
                    <div class="img-wrapper">
                        <img src="assets/img/sidebar/insta2.png" alt="">
                    </div>
                    <div class="img-wrapper">
                        <img src="assets/img/sidebar/insta3.png" alt="">
                    </div>
                </div>
            </div>


            <!-- Related product widget  -->
            <div class="widget widget_related_products sidebar_widget  border-bottom">
                <h5 class="widget-title padding-bottom-10">Related Products</h5>
                <ul class="related_products_item">
                    <li class="single-related_product">
                        <div class="thumb">
                            <img src="assets/img/sidebar/rel1.png" alt="recent post">
                        </div>
                        <div class="content">
                            <h6 class="title"> <a href="product-details.php"> Aloe Vera Flesh Leaf</a></h6>
                            <div class="star-ratings">
                                <i class="flaticon-star "></i>
                                <i class="flaticon-star "></i>
                                <i class="flaticon-star "></i>
                                <i class="flaticon-star "></i>
                                <i class="flaticon-star "></i>
                            </div>
                            <div class="price-box">
                                <p class="price">
                                    <span class="sale-price">$150.00</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="single-related_product">
                        <div class="thumb">
                            <img src="assets/img/sidebar/rel2.png" alt="recent post">
                        </div>
                        <div class="content">
                            <h6 class="title"> <a href="product-details.php">Lifestream Vitamin C</a></h6>
                            <div class="star-ratings">
                                <i class="flaticon-star "></i>
                                <i class="flaticon-star "></i>
                                <i class="flaticon-star "></i>
                                <i class="flaticon-star "></i>
                                <i class="flaticon-star "></i>
                            </div>
                            <div class="price-box">
                                <p class="price">
                                    <span class="sale-price">$220.00</span>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>



            <!-- Tag  widget  -->
            <div class="widget widget_nav_menu sidebar_widget">
                <h5 class="widget-title">Tags</h5>
                <div class="left-item">
                    <ul>
                        <li class="active"><a href="#">Care</a></li>
                        <li><a href="#">Health</a></li>
                        <li><a href="#">Innovation</a></li>
                        <li><a href="#">Medicine</a></li>
                    </ul>
                </div>
                <div class="right-item">
                    <ul>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">R & D</a></li>
                        <li><a href="#">Pipeline</a></li>
                        <li><a href="#">Cancer</a></li>
                    </ul>
                </div>


            </div>


            <!-- Social widget  -->
            <div class="widget  sidebar_widget">
                <h5 class="widget-title">Follow Us</h5>
                <div class="footer-icon margin-top-25">
                    <a href="#" target="_blank"><i class="flaticon-facebook-logo"></i></a>
                    <a href="#" target="_blank"><i class="flaticon-twitter"></i></a>
                    <a href="#" target="_blank"><i class="flaticon-linked-in-logo-of-two-letters"></i></a>
                    <a href="#" target="_blank"><i class="flaticon-instagram"></i></a>
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>

</section>
<!--============= shop area end here ===============-->

<!--============= Footer Section  start here ===============-->
<footer class="footer-area">
    <div class="footer-top style-3  padding-top-80 padding-bottom-80">
        <div class="nav-container">
            <div class="footer-widget-content-wrapper">
                <div class="footer-widget-content">
                    <div class="footer-widget widget">
                        <div class="about_us_widget padding-bottom-10">
                            <a href="index.html" class="footer-logo"> <img src="assets/img/logo/logo.png" alt="footer logo"></a>
                        </div>
                        <div class="footer-widget widget widget_nav_menu ">
                            <ul class="footer-link">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="copyright-area-inner">
                            <div class="qry-copy">
                                © Jozicular <span class="current-year"></span> All right reserved. Powered with
                                <i class="flaticon-like
                                        "></i>
                                by <a href="http://zwin.io/" target="_blank">Zwin</a>
                            </div>
                        </div>
                        <div class="footer-widget widget white-effect">
                            <div class="footer-icon margin-top-25">
                                <a href="#" target="_blank"><i class="flaticon-facebook-logo"></i></a>
                                <a href="#" target="_blank"><i class="flaticon-twitter"></i></a>
                                <a href="#" target="_blank"><i class="flaticon-linked-in-logo-of-two-letters"></i></a>
                                <a href="#" target="_blank"><i class="flaticon-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--============= footer area end here ===============-->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="flaticon-chevron"></i></span>
</div>
<!-- back to top area end -->

<!-- jquery -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<!-- popper -->
<script src="assets/js/popper.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!-- isotope -->
<script src="assets/js/isotope.min.js"></script>
<!-- wow -->
<script src="assets/js/wow.min.js"></script>
<!-- owl carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- waypoint -->
<script src="assets/js/waypoints.min.js"></script>
<!-- Slick Slider -->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/slick-animation.js"></script>
<!-- Nice scroll -->
<script src="assets/js/jquery.nicescroll.js"></script>
<!-- Nice-select -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- counterup -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- imageloaded -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- img hotspot -->
<script src="assets/js/jquery.hotspot.js"></script>

<!-- main js -->
<script src="assets/js/slider.js"></script>
<script src="assets/js/main.js"></script>



</body>


<!-- Mirrored from zwin.io/html/jozicular/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2023 06:27:44 GMT -->

</html>