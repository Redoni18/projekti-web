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
        <div class="differentPage">
            <div class="container">
                <div class="header-div">
                    <div class="logo-div">
                        <img class="logo" src="../TheIncredibleTrueStory.png" alt="logo image">
                    </div>

                    <?php include '../components/navbar.php'; ?>

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
                <?php 
                    $apparelProducts = new DashboardController;
                    $allApparelProducts = $apparelProducts->readApparelProducts();
                    foreach($allApparelProducts as $apparelProduct){
                        echo '
                            <div class="product-column">
                            <div class="product-img-container">
                                <img src="../'. $apparelProduct['product_image'] .'" alt="one product">
                            </div>
                            <div class="product-text">
                                <p style="font-size: 15px;"><a href="./product-desc.php?id='.$apparelProduct['Id'].'">'. $apparelProduct['product_name'] .'</a></p>
                                <p><small>$'. $apparelProduct['product_price'] .'.00</small></p>
                            </div>
                        </div>
                        ';
                    }
                ?>
            </div>
        </div>

        <?php include '../components/footer.php'; ?>

        <script src="../main.js"></script>
        <script src="../menuToggler.js"></script>
    </body>
</html>