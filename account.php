<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GemStone</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&family=Poiret+One&display=swap" rel="stylesheet">
</head>
<body>
<header id="header">
    <div class="header-wrap">
        <nav class="primary-nav">
            <div class="container max-width">
                <div class="row d-flex align-items-center">
                    <div class="col-md-2 col-sm-6">
                        <div class="main-logo">
                            <a href="index.html">
                                <img src="images/main-logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-6">
                        <div class="navbar d-flex">
                            <div class="main-menu stellarnav desktop light">
                                <ul class="menu-list list-unstyled">
                                    <li class="menu-item">
                                        <a href="index.html" class="text-uppercase item-anchor">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="about.html" class="text-uppercase item-anchor">About</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="shop.html" class="text-uppercase item-anchor">Shop</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="blog.html" class="text-uppercase item-anchor">Blog</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="contact.html" class="text-uppercase item-anchor">Contact</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="login.php" class="text-uppercase item-anchor">My Account</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hamburger">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<section class="contact-page padding-large">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">Contact us</h1>
                <div class="breadcrumbs">
              <span class="item">
                <a href="index.html">Home /</a>
              </span>
                    <span class="item">Contact us</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-information bg-grey padding-large">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Get in Touch</h2>
                <div class="contact-detail">
                    <div class="detail-list">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <ul class="list-unstyled list-icon">
                            <li>
                                <i class="icon icon-phone"></i>+1650-243-0000
                            </li>
                            <li>
                                <i class="icon icon-envelope"></i>
                                <a href="mailto:info@yourcompany.com">info@yourcompany.com</a>
                            </li>
                            <li>
                                <i class="icon icon-location"></i>North Melbourne VIC 3051, Australia
                            </li>
                        </ul>
                    </div>
                    <div class="social-links">
                        <h3>Social Links</h3>
                        <ul class="d-flex list-unstyled">
                            <li><a href="#" class="icon icon-facebook"></a></li>
                            <li><a href="#" class="icon icon-twitter"></a></li>
                            <li><a href="#" class="icon icon-pinterest-p"></a></li>
                            <li><a href="#" class="icon icon-youtube"></a></li>
                            <li><a href="#" class="icon icon-linkedin"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-information">
                    <h2>Send A Message</h2>
                    <form name="contactform" action="contact.php" method="post" class="contact-form">
                        <div class="form-item">
                            <input type="text" minlength="2" name="name" placeholder="Name" class="u-full-width bg-light" required>
                            <input type="email" name="email" placeholder="E-mail" class="u-full-width bg-light" required>
                            <textarea class="u-full-width bg-light" name="message" placeholder="Message" style="height: 180px;" required></textarea>
                        </div>
                        <label>
                            <input type="checkbox" required>
                            <span class="label-body">I agree all the <a href="#">terms and conditions</a>
                  </span>
                        </label>
                        <button type="submit" name="submit" class="btn btn-full btn-medium btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="bg-grey padding-large overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="footer-logo col-md-12 text-center">
                <img src="images/main-logo.png" alt="main-logo">
            </div>
            <div class="footer-content">
                <div class="row d-flex flex-wrap">
                    <div class="footer-menu col-md-2 col-sm-6 col-xs-6">
                        <h5 class="widget-title text-uppercase">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Shop</a>
                            </li>
                            <li>
                                <a href="#">Products</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-menu col-md-3 col-sm-6 col-xs-6">
                        <h5 class="widget-title text-uppercase">Your Account</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">My Account</a>
                            </li>
                            <li>
                                <a href="#">Login</a>
                            </li>
                            <li>
                                <a href="#">Wish Lists</a>
                            </li>
                            <li>
                                <a href="#">My Addresses</a>
                            </li>
                            <li>
                                <a href="#">My Orders</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-menu col-md-4 col-sm-6 col-xs-6">
                        <h5 class="widget-title text-uppercase">Special Products</h5>
                        <div class="footer-post d-flex flex-wrap">
                            <div class="post-image">
                                <img src="images/dring.jpg" alt="post" class="footer-image">
                            </div>
                            <div class="text-block">
                                <a href="#">Diamond Crescent Silver Ring</a>
                                <span class="meta-price text-primary">$28.00</span>
                            </div>
                        </div>
                        <div class="footer-post d-flex flex-wrap">
                            <div class="post-image">
                                <img src="images/dring.jpg" alt="post" class="footer-image">
                            </div>
                            <div class="text-block">
                                <a href="#">Diamond Crescent Golden Ring</a>
                                <span class="meta-price text-primary">$48.00</span>
                            </div>
                        </div>
                        <div class="footer-post d-flex flex-wrap">
                            <div class="post-image">
                                <img src="images/dtop.jpg" alt="post" class="footer-image">
                            </div>
                            <div class="text-block">
                                <a href="#">Diamond Crescent Curve Ring</a>
                                <span class="meta-price text-primary">$58.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="footer-menu col-md-3 col-sm-6 col-xs-6">
                        <h5 class="widget-title text-uppercase">Newsletter</h5>
                        <div class="content">
                            <div class="widget-content">
                                <p>Stay Updated With Us For News And Offers</p>
                                <div class="newsletter-button d-flex flex-wrap align-items-center">
                                    <input type="text" name="Subscribe" placeholder="Your Email Address">
                                    <button class="btn btn-primary">Subscribe</button>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="address">
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="icon icon-location text-primary"></i>PO Box 1612 Collin Street, NYC
                                        </li>
                                        <li>
                                            <i class="icon icon-phone text-primary"></i>(+801) - 2345 - 6789
                                        </li>
                                        <li>
                                            <i class="icon icon-envelope text-primary"></i>
                                            <div class="mail-address">
                                                <a href="mailto:hello@templatesjungle.com" class="">hello@templatesjungle.com</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom bg-dark-grey padding-small no-padding-bottom">
    <div class="container">
        <div class="footer-bottom-content d-flex flex-wrap justify-content-between content-light">
            <div class="copyright">
                <p>&copy; 2022 All Rights Reserved. A Free HTML Template by <a href="https://templatesjungle.com/" target="_blank">TemplatesJungle</a></p>
            </div>
            <div class="social-links d-flex">
                <span>Follow Us:</span>
                <ul class="list-unstyled d-flex">
                    <li>
                        <a href="#">
                            <i class="icon icon-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon icon-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon icon-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="payment-card">
                <span>We Accept:</span>
                <img src="images/visa.png" class="card-image">
                <img src="images/american-express.png" class="card-image">
                <img src="images/master-card.png" class="card-image">
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>