<?php 
    session_start();
    require_once '../controllers/DashboardController.php';

    $currentProduct = new DashboardController;
    if(isset($_GET['id'])){
        $productId = $_GET['id'];
    }

    $productDetail = $currentProduct->editData($productId);

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
        <link rel="stylesheet" href="../css/product-desc.css">
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
        
        <div class="product-desc">
            <div class="product">
                <div class="product-img">
                    <img src="../<?php echo $productDetail['product_image'] ?>" alt="">
                </div>
                <div class="product-details">
                    <h4><?php echo $productDetail['product_name'] ?></h4>
                    <p>Description:</p>
                    <p><?php echo $productDetail['product_description'] ?></p>
                    <?php if($productDetail['product_quantity'] != 0){
                        echo '<p>'.$productDetail['product_quantity'] .' in stock</p>';
                    } else {
                        echo '<p>Out of stock</p>';
                    }
                    ?>
                    <p>Price: $<?php echo $productDetail['product_price'] ?></p>
                    <p>Payment methods:</p>
                    <div class="payment-methods" style="margin: 5px 0;">
                        <i class="fa fa-paypal"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-visa"></i>
                        <i class="fa fa-google-wallet"></i>
                        <i class="fa fa-money"></i>
                    </div>
                </div>
            </div>
            <div class="butonat">
                <button class="butoni" style="background-color: aquamarine;">Purchase</button>
                <button class="butoni" style="background-color: lightblue;">Add to cart</button>
            </div>
        </div>

        <?php include '../components/footer.php'; ?>

        <script src="../menuToggler.js"></script>
    </body>
</html>