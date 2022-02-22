<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://use.fontawesome.com/b106d7266c.js"></script>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/nav-style.css">
        <link rel="stylesheet" href="./css/slideshow.css">
        <link rel="stylesheet" href="css/footer.css">
    </head>
    <body>
        <div class="homepage">
            <div class="container">
                <div class="header-div">
                    <div class="logo-div">
                        <img class="logo" src="TheIncredibleTrueStory.png" alt="logo image">
                    </div>
                    <nav>
                        <ul class="nav-list" id="menu-items">
                            <li><a href="#">Home</a></li>
                            <div class="dropdown">
                                <li class="dropbtn">Products</li>
                                <div class="dropdown-content">
                                  <a href="./pages/technology.php">Technology</a>
                                  <a href="./pages/apparel.php">Apparel</a>
                                  <a href="./pages/sports&entertainment.php">Sports & Entertainment</a>
                                  <a href="./pages/home&garden.php">Home & Garden</a>
                                </div>
                              </div> 
                              <li><a href="./pages/about-us.php">About us</a></li>
                              <li><a href="./pages/contact-us.php">Contact us</a></li>
                              <li><a href="./pages/login.php">Account</a></li>
                              <li><a href="./pages/cart.php"><i class="fa fa-cart-plus"></i></a></li>
                            </ul>
                        </nav>
                        <img src="menu.png" alt="menu" class="menu" onclick="toggleMenu()">
                </div>
                <div class="image-slideshow">
                    <div class="slideshow">
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="resources/slideshow/iphone.jpg" style="width:100%" id="img" class="slide-image">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="resources/slideshow/lawn-mower.png" style="width:100%" id="img" class="slide-image">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="resources/slideshow/samsungS21.jpg" style="width:100%" id="img" class="slide-image">
                        </div>
                        <br>
                    </div>
                    <div style="text-align:center">
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                    </div>
                </div>
            </div>
        </div>
        <div class="categories">
            <div class="products-container">
                <div class="row">
                    <div class="product-category">
                        <img src="resources/categories/tech-category.png" alt="">
                        <h3>Technology</h3>
                    </div>
                    <div class="product-category">
                        <img src="resources/categories/apparel.jpg" alt="">
                        <h3>Apparel</h3>
                    </div>
                    <div class="product-category">
                        <img src="resources/categories/sport&entertainment.jpg" alt="">
                        <h3>Sports & Entertainment</h3>
                    </div>
                    <div class="product-category">
                        <img src="resources/categories/home&garden.jpg" alt="">
                        <h3>Home & Garden</h3>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="products-container">
            <h2>Some of our products</h2>
            <div class="row">
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="resources/technology/0.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;"><a href="./pages/product-desc.php">Laptop Apple MacBook Pro 13 , 13'', 16GB RAM, 256GB SSD</a></p>
                        <p><small>$1400.0</small><small class="small-text">$1700.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="resources/technology/1.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Laptop Lenovo Legion, 15.6'', 16GB RAM, 1TB SSD</p>
                        <p><small>$200.0</small></p>
                    </div>
                </div><div class="product-column">
                    <div class="product-img-container">
                        <img src="resources/apparel/0.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">TV Samsung UE58AU7172UXXH, 58"/146 cm, 3840 x 2160</p>
                        <p><small>$550.0</small><small class="small-text">$779.0</small></p>
                    </div>
                </div>
                <div class="product-column">
                    <div class="product-img-container">
                        <img src="resources/technology/3.jpg" alt="one product">
                    </div>
                    <div class="product-text">
                        <p style="font-size: 15px;">Monitor Dell Alienware AW2521H 360Hz, 25" LED, Full HD</p>
                        <p><small>$400.0</small></p>
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
                        <img class="footer-logo" src="TheIncredibleTrueStory.png" alt="logo image">
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

        <script src="main.js"></script>
        <script src="menuToggler.js"></script>
    </body>
</html>