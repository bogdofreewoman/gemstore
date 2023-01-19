<?php
session_start();?>

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

<!-- LOGIN-->

<div class="main-log">
    <div class="col-md-2">
    </div>
    <div class="log-reg">
        <div class="col-md-3">
            <div class="comment-respond">
                <h2 class="log-reg-title">Login</h2>
                <form method="post" class="form-group" action="http://localhost:8000/php/reg.php">
                    <input class="u-full-width" type="text" name="email" id="email-log" class="form-control" placeholder="Your E-mail Address">
                    <input class="u-full-width" type="password" name="password" id="password_log" class="form-control" placeholder="Password">
                    <div class="col-md-12">
                        <label class="example-send-yourself-copy">
                            <input type="checkbox">
                            <span class="label-body">Remember Me.</span>
                        </label>
                    </div>
                    <div class="col-md-12">
                        <input class="btn btn-primary btn-full" type="submit" value="Submit">
                    </div>
                </form>
                <div class="reg-in-log">
                    <p class="reg-in-log"> Registration</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- REGISTRATION -->

<div class="main-reg">
    <div class="col-md-2"></div>
    <div class="log-reg">
        <div class="col-md-3">
            <div class="comment-respond">
                <h2 class="log-reg-title">Registration</h2>
                <form  method="post" class="form-group" action="http://localhost:8000/php/reg.php">
                    <input class="u-full-width" type="text" name="email" id="email-reg" class="form-control" placeholder="Your E-mail Address">
                    <input class="u-full-width" type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                    <input class="u-full-width" type="text" name="secondName" id="secondName" class="form-control" placeholder="Second Name">
                    <input class="u-full-width" type="password" name="password_reg" id="password_reg" class="form-control" placeholder="Password">
                    <input class="u-full-width" type="password" name="password_conf" id="password_conf" class="form-control" placeholder="Confirm Password">
                    <?php
                    if($_SESSION['msg-succ']){
                        echo'<p class="msg-succ">'.$_SESSION['msg-succ']. '</p>';
                    }
                    unset($_SESSION['msg-succ']);

                    if($_SESSION['msg-err']){
                        echo'<p class="msg-err">'.$_SESSION['msg-err']. '</p>';
                    }
                    unset($_SESSION['msg-err']);
                    ?>
                    <div class="col-md-12">
                        <input class="btn btn-primary btn-full" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-md-2">
</div>
</div>
<footer>
</footer>
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>