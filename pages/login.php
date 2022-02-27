<?php
    session_start(); 
    require_once '../config/Database.php';
    require_once '../controllers/DashboardController.php';

    $db = new Database;

    $userInsert = new DashboardController;

    if(isset($_POST['submit'])){
        $errors = [];

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            array_push($errors,'Ploteso te gjitha fushat!');
        }
        $queryU= $db->pdo->query("SELECT * FROM user WHERE username LIKE '$username'");

        $userPassword = $userInsert->readUserData($username);

        if(!count($queryU->fetchAll()) ){
           array_push($errors,'Ky username nuk ekziston');
        }
        if(!password_verify($password, $userPassword['user_password'])){
            array_push($errors,'Password nuk eshte i sakte!');
        }
        if(count($errors) == 0){
            $_SESSION['roli'] = $userPassword['user_role'];
  			$_SESSION['username'] = $userPassword['username'];

            $name   = 'timeOfLogin';
            $value  = date("h:ia");
            $expire = time() + 60 * 60 * 24 * 30;
            setcookie( $name, $value, $expire);
              
            $secName   = 'username';
            $secValue  = $userPassword['username'];
            setcookie( $secName, $secValue, $expire);
            

            header('Location: ../index.php');
        }
        $_SESSION['errors'] = $errors;
    }
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
        <link rel="stylesheet" href="../css/account.css">
        <link rel="stylesheet" href="../css/footer.css">
    </head>
    <style>
        p.error{
            border-radius:5px;
            color:red;
            border:1px solid red;
            padding:10px;margin:10px;
        }
    </style>
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
                            <li><a href="#">Account</a></li>
                            <li><a href="./cart.php"><i class="fa fa-cart-plus"></i></a></li>
                        </ul>
                    </nav>
                    <img src="../menu.png" alt="menu" class="menu" onclick="toggleMenu()">
                </div>
            </div>
        </div>
        <div class="account-page">
            <div class="login-form-element">
                <p class="log-in" align="center">Log in</p>
                <?php 
                if(isset($_SESSION["errors"]))
                    foreach($_SESSION["errors"] as $error)
                        echo '<p class="error">'.$error.'</p>';
                ?>
                    <form class="login-form" method = 'POST'>
                        <input id="username" class="firstInfo " type="text" align="center" placeholder="Username" required="true" name="username">
                        <input id="password" class="password" type="password" align="center" placeholder="Password" name="password">
                        <input type="submit" onclick="validoLogin()" class="submit" align="center" value="Sign In" id="submit" name="submit">
                        <div class="sign-up-message" style="margin-top: 25px;font-size: 13px;">
                            <p align="center">Don't have an account? <a href="./signup.php" style="color: dodgerblue;">Sign up</a></p>
                        </div>
                        
                    </form>
                </div>
        </div>

        <!-- <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="login-column">
                        <div class="login-form">
                            <div class="page-message">
                                <span><h2>Login</h2></span>
                            </div>
                            <form>
                                <input type="text" placeholder="Username...">
                                <input type="password" placeholder="Password...">
                                <button type="submit" class="login-btn">Login</button>
                                <br>
                                <small>
                                    Don't have an account?
                                    <a href="./signup.html">Sign up</a>
                                </small>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

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
        <script src="../js/login-validation.js"></script>
        <script src="../menuToggler.js"></script>
    </body>
</html>