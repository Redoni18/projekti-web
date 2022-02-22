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
                                  <a href="./sports&entertainment.php">Sports & Entertainment</a>
                                  <a href="#">Home & Garden</a>
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
                    <img src="../resources/slideshow/h&g slideshow/0.jpg" style="width:100%" id="img" class="slide-image">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="../resources/slideshow/h&g slideshow/1.jpg" style="width:100%" id="img" class="slide-image">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="../resources/slideshow/h&g slideshow/2.jpg" style="width:100%" id="img" class="slide-image">
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
                        <img src="../resources/home&garden/0.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Landmann Tennessee Broiler</p>
                        <p><small>$280.00</small><small class="small-text">$300.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/1.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Outback Jupiter 4 Burner Hybrid Gas BBQ - Stainless Steel</p>
                        <p><small>$450.0</small></p>
                    </div>
                </div><div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/2.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Ooni Koda 12 Gas-Powered Portable Pizza Oven
                        </p>
                        <p><small>$250.00</small><small class="small-text">$280.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/3.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Ooni Koda Portable Pizza Oven</p>
                        <p><small>$200.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/4.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Alexander Rose Roble 6 Seat Wooden Set</p>
                        <p><small>$2000.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/5.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Alexander Rose Roble 6 Seat Charcoal Recliner Set</p>
                        <p><small>$2400.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/6.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Alexander Rose Monte Carlo 4 Seat Closed Weave Armchair Set</p>
                        <p><small>$1700.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/7.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Gardena Classic Water Sprayer Set</p>
                        <p><small>$25.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/8.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Gardena EcoLine Water Sprayer</p>
                        <p><small>$15.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/9.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Gardena Comfort FLEX Hose 15m</p>
                        <p><small>$25.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/10.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Gardena Ecoline Trowel</p>
                        <p><small>$20.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/11.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">RHS Stainless Mid Handled Shrub Rake by Burgon and Ball</p>
                        <p><small>$25.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/12.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Sophie Conran Trowel by Burgon and Ball</p>
                        <p><small>$25.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/13.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Muck Boot Womens Arctic Sport III Tall Black</p>
                        <p><small>$120.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/14.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Muck Boot Womens Arctic Sport II Tall Black</p>
                        <p><small>$125.00</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/home&garden/15.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Muck Boot Womens Arctic Sport II Tall Navy Spruce</p>
                        <p><small>$125.00</small></p>
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