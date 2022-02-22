<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://use.fontawesome.com/b106d7266c.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/nav-style.css">
        <link rel="stylesheet" href="../css/slideshow.css">
        <link rel="stylesheet" href="../css/footer.css">
    </head>
    <body>
        <div class="differentPage">
            <div class="container">
                <div class="header-div">
                    <div class="logo-div">
                        <img class="logo" src="../TheIncredibleTrueStory.png" alt="logo image">
                    </div>
                    <nav>
                        <ul class="nav-list" id="menu-items">
                            <li><a href="../index.php">Home</a></li>
                            <div class="dropdown">
                                <li class="dropbtn">Products</li>
                                <div class="dropdown-content">
                                  <a href="./technology.php">Technology</a>
                                  <a href="./apparel.php">Apparel</a>
                                  <a href="#">Sports & Entertainment</a>
                                  <a href="./home&garden.php">Home & Garden</a>
                                </div>
                              </div> 
                            <li><a href="./about-us.php">About us</a></li>
                            <li><a href="./contact-us.php">Contact us</a></li>
                            <li><a href="./login.php">Account</a></li>
                            <li><a href="./cart.php"><i class="fa fa-cart-plus"></i></a></li>
                        </ul>
                    </nav>
                    <img src="../menu.png" alt="menu" class="menu" onclick="toggleMenu()">
                </div>
            </div>
        </div>
        <div class="image-slideshow" style="margin-top: 20px;">
            <div class="slideshow">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="../resources/slideshow/s&e slideshow/0.jpg" style="width:100%" id="img" class="slide-image">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="../resources/slideshow/s&e slideshow/1.jpg" style="width:100%" id="img" class="slide-image">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="../resources/slideshow/s&e slideshow/2.jpg" style="width:100%" id="img" class="slide-image">
                </div>
                <br>
            </div>
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
        </div>

        <div class="products-container">
            <div class="row">
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/0.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Under Armour UA HOVR APEX 3</p>
                        <p><small>$125.99</small><small class="small-text">$145.99</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/1.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Nike Renew Retaliation TR 3</p>
                        <p><small>$90.0</small></p>
                    </div>
                </div><div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/2.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Nike Air Zoom Alphafly NEXT% Men's Racing Shoe</p>
                        <p><small>$250.00</small><small class="small-text">$275.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/3.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Nike ZoomX Invincible Run Flyknit</p>
                        <p><small>$180.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/4.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Champion Hold All</p>
                        <p><small>$30.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/5.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">NIKE BIG MOUTH 2.0 22 OZ</p>
                        <p><small>$10.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/6.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">RING SPORT RX BUC cast flask 1 x 20kg</p>
                        <p><small>$60.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/7.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Nike Elemental</p>
                        <p><small>$25.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/8.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Nike Brasilia</p>
                        <p><small>$50.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/9.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Nike Renew Retaliation TR 3</p>
                        <p><small>$90.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/10.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Adidas Trail Bottle</p>
                        <p><small>$15.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/11.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Lonsdale Jump Rope</p>
                        <p><small>$7.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/12.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Lonsdale LNSD Fitness Weights</p>
                        <p><small>$16.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/13.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Nike Recovery Foam Roller</p>
                        <p><small>$40.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/14.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">RING SPORT RX 07 bench</p>
                        <p><small>$60.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/sports&entertainment/15.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">RING SPORT RX 110</p>
                        <p><small>$165.00</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="row">
                <div class="footer-column">
                    <p>&copy; Copyright by: Redon Emini &amp; Vullnet Kabashi</p>
                </div>
                <div class="footer-column">
                    <div class="logo-div">
                        <img class="logo" src="../TheIncredibleTrueStory.png" alt="logo image">
                    </div>
                </div>
                <div class="footer-column">
                    <div class="follow">
                        <p>Follow us</p>
                    </div>
                    <div class="socials">
                        <ul class="social-list">
                            <a href="https://www.instagram.com/" target="_blank"><li><i class="fa fa-instagram"></i></li></a>
                            <a href="https://www.facebook.com/" target="_blank"><li><i class="fa fa-facebook"></i></li></a>
                            <a href="https://www.pinterest.com/" target="_blank"><li><i class="fa fa-pinterest"></i></li></a>
                            <a href="https://www.twitter.com/" target="_blank"><li><i class="fa fa-twitter"></i></li></a>
                            <a href="https://www.linkedin.com/" target="_blank"><li><i class="fa fa-linkedin"></i></li></a>
                            <a href="https://www.reddit.com/" target="_blank"><li><i class="fa fa-reddit"></i></li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script src="../main.js"></script>
        <script src="../menuToggler.js"></script>
    </body>
</html>