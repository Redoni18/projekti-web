<?php 
    session_start();
    require_once '../controllers/DashboardController.php';

    $messages = new DashboardController;

    if(isset($_POST['submit'])){

        $errors=[];

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(empty($name) || empty(trim($name)) || empty($email) || empty($message)){
            array_push($errors,'Ploteso te gjitha fushat!');
            $_SESSION['errors'] = $errors;
        }else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors,'Invalid Email');
            }else if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                array_push($errors,'Invalid name');
            }else{
                $messages->sendMessage($_POST);
            }
        }
        $_SESSION['errors'] = $errors;
    }

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://use.fontawesome.com/b106d7266c.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/nav-style.css">
        <link rel="stylesheet" href="../css/contact-us.css">
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
                        <h1><a href="./index.php">Gjirafa60</a></h1>
                    </div>

                    <?php include '../components/navbar.php'; ?>
                    
                    <img src="../menu.png" alt="menu" class="menu" onclick="toggleMenu()">
                </div>
            </div>
        </div>
        <?php 
                if(isset($_SESSION["errors"]))
                    foreach($_SESSION["errors"] as $error)
                        echo '<p class="error">'.$error.'</p>';
                ?>
        <div class="contact-us-container">
            <form style="display: block;" method="POST">
                <div class="name-email-input">
                    <input class="InputN" id="emri" type="text" placeholder="Your name" name="name">
                    <input class="InputE" id="email" type="text" placeholder="Your email" name="email">
                </div>
                <div class="message-input">
                    <textarea class="InputM" id="mesazhi" type="text" placeholder="Your message" style="resize: none;" name="message"></textarea>
                </div>
                <br>
                <input style="cursor: pointer;" class="formButton" type="submit" onclick="validoMesazhin()" name="submit" value="Send Message"></input>
            </form>
        </div>

        <?php include '../components/footer.php'; ?>

        <script src="../menuToggler.js"></script>
        <script src="../js/contact-us-validation.js"></script>
    </body>
</html>