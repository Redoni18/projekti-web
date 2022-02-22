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
                    <nav>
                        <ul class="nav-list" id="menu-items">
                            <li><a href="../index.php">Home</a></li>
                            <div class="dropdown">
                                <li class="dropbtn">Products</li>
                                <div class="dropdown-content">
                                  <a href="./technology.php">Technology</a>
                                  <a href="./apparel.php">Apparel</a>
                                  <a href="./sports&entertainment.php">Sports & Entertainment</a>
                                  <a href="./home&garden.php">Home & Garden</a>
                                </div>
                              </div> 
                            <li><a href="./about-us.php">About us</a></li>
                            <li><a href="./contact-us.php">Contact us</a></li>
                            <li><a href="./login.php">Account</a></li>
                            <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                        </ul>
                    </nav>
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
        <script src="../menuToggler.js"></script> 
    </body>
</html>