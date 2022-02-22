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
                                  <a href="#">Apparel</a>
                                  <a href="./sports&entertainment.php">Sports & Entertainment</a>
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
                    <img src="../resources/slideshow/a slideshow/0.jpg" style="width:100%" id="img" class="slide-image">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="../resources/slideshow/a slideshow/1.jpg" style="width:100%" id="img" class="slide-image">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="../resources/slideshow/a slideshow/2.jpg" style="width:100%" id="img" class="slide-image">
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
                        <img src="../resources/apparel/0.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Wrangler Authentics Men's Long Sleeve Quilted Lined Flannel Shirt Jacket with Hood</p>
                        <p><small>$30.0</small><small class="small-text">$350.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/1.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">NIKE DEFYALLDAY</p>
                        <p><small>$45.0</small><small class="small-text">$60.0</small></p>
                    </div>
                </div><div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/2.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Duks për Meshkuj Nike NSW CLUB CRW BB</p>
                        <p><small>$35.0</small><small class="small-text">$40.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/3.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Bluze për femra Vero Moda 206673, Snow White, M</p>
                        <p><small>$30.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/4.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Trenerka të Poshtme për Fëmijë Nike NSW CLUB + HBR PANTV</p>
                        <p><small>$30.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/5.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Jakne për Femra MCKINLEY</p>
                        <p><small>$75.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/6.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Trenerka Set për Femra Adidas 3S TR TS</p>
                        <p><small>$65.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/7.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Maicë për Meshkuj Nike NSW TEE JUST DO IT SWOOSH</p>
                        <p><small>$20.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/8.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Çizme për Meshkuj MCKINLEY</p>
                        <p><small>$48.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/9.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Doreza MCKINLEY</p>
                        <p><small>$19.99</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/10.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Atlete për Femra Nike NIKE COURT ROYALE 2 NN</p>
                        <p><small>$50.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/11.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Çizme për Fëmijë Nike FLEX ADVANCE BOOT BP</p>
                        <p><small>$50.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/12.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Çanta Nike HERITAGE BKPK - FA21</p>
                        <p><small>$31.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/13.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Kapelë Nike BEANIE</p>
                        <p><small>$12.50</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/14.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Maicë për Femra Under Armour Live Sportstyle Graphic SSC</p>
                        <p><small>$16.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="../resources/apparel/15.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Trenerka të Poshtme për Meshkuj Nike THRMA PANT TAPER</p>
                        <p><small>$35.0</small></p>
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
                            <a href="https://www.instagram.com/" target="_blank"><li><i class="fa fa-facebook"></i></li></a>
                            <a href="https://www.instagram.com/" target="_blank"><li><i class="fa fa-pinterest"></i></li></a>
                            <a href="https://www.instagram.com/" target="_blank"><li><i class="fa fa-twitter"></i></li></a>
                            <a href="https://www.instagram.com/" target="_blank"><li><i class="fa fa-linkedin"></i></li></a>
                            <a href="https://www.instagram.com/" target="_blank"><li><i class="fa fa-reddit"></i></li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script src="../main.js"></script>
        <script src="../menuToggler.js"></script>
    </body>
</html>