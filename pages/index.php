<?php 
    session_start();
    require_once '../controllers/DashboardController.php';
?>

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
        <div class="homepage">
            <div class="container">
                <div class="header-div">
                    <div class="logo-div">
                        <h1><a href="./index.php">Gjirafa60</a></h1>
                    </div>
                        <?php include '../components/navbar.php'; ?>
                        <img src="../menu.png" alt="menu" class="menu" onclick="toggleMenu()">
                </div>
                <div class="image-slideshow">
                    <div class="slideshow">
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="../resources/slideshow/iphone.jpg" style="width:100%" id="img" class="slide-image">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="../resources/slideshow/lawn-mower.png" style="width:100%" id="img" class="slide-image">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="../resources/slideshow/samsungS21.jpg" style="width:100%" id="img" class="slide-image">
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
                        <img src="../resources/categories/tech-category.png" alt="">
                        <?php
                        if (isset($_SESSION['roli'])) {
                                ?>
                                <h3><a href="../pages/technology.php">Technology</a></h3>
                            <?php
                            }else{
                                ?>
                                <h3><a href="./login.php">Technology</a></h3>
                            <?php
                            }
                        ?>
                        
                    </div>
                    <div class="product-category">
                        <img src="../resources/categories/apparel.jpg" alt="">
                        <?php
                        if (isset($_SESSION['roli'])) {
                                ?>
                                <h3><a href="../pages/apparel.php">Apparel</a></h3>
                            <?php
                            }else{
                                ?>
                                <h3><a href="./login.php">Apparel</a></h3>
                            <?php
                            }
                        ?>
                    </div>
                    <div class="product-category">
                        <img src="../resources/categories/sport&entertainment.jpg" alt="">
                        <?php
                        if (isset($_SESSION['roli'])) {
                                ?>
                                <h3><a href="../pages/sports&entertainment.php">Sports & Entertainment</a></h3>
                            <?php
                            }else{
                                ?>
                                <h3><a href="./login.php">Sports & Entertainment</a></h3>
                            <?php
                            }
                        ?>
                    </div>
                    <div class="product-category">
                        <img src="../resources/categories/home&garden.jpg" alt="">
                        <?php
                        if (isset($_SESSION['roli'])) {
                                ?>
                                <h3><a href="../pages/home&garden.php">Home & Garden</a></h3>
                            <?php
                            }else{
                                ?>
                                <h3><a href="./login.php">Home & Garden</a></h3>
                            <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="products-container">
            <h2>Some of our products</h2>
            <div class="row">
            <?php 
                $products = new DashboardController;
                $allProducts = $products->readData();
                foreach($allProducts as $product){
                    echo '<div class="product-column">
                        <div class="product-img-container">
                            <img src="../' .$product['product_image'] .'" alt="one product">
                        </div>
                        <div class="product-text">
                            <p style="font-size: 15px;"><a href="./product-desc.php?id='.$product['Id'].'">' .$product['product_name'] .'</a></p>
                            <p><small>$' .$product['product_price'] .'</small></p>
                        </div>
                    </div>';
                }
            ?>
            </div>
        </div>

        <?php include '../components/footer.php'; ?>

        <script src="../main.js"></script>
        <script src="../menuToggler.js"></script>
    </body>
</html>