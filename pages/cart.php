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
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/cart.css">
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

        <h2 class="my-cart">My Cart</h2>
        <div class="cart">
            <div class="cart-container">
                <table>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Price</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-info">
                                <img src="../resources/technology/0.jpg">
                                <div class="cart-product-description">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla id eos consequuntur molestiae quae, sint qui error officiis perferendis, cum quos. Soluta distinctio error quae officiis dignissimos libero aperiam corrupti.</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            $1400.00
                            <div>
                                <button class="butoni" style="background-color: aquamarine;">Purchase</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-info">
                                <img src="../resources/sports&entertainment/10.jpg">
                                <div class="cart-product-description">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla id eos consequuntur molestiae quae, sint qui error officiis perferendis, cum quos. Soluta distinctio error quae officiis dignissimos libero aperiam corrupti.</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            $15.00
                            <div>
                                <button class="butoni" style="background-color: aquamarine;">Purchase</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <?php include '../components/footer.php'; ?>

        <script src="../menuToggler.js"></script> 
    </body>
</html>