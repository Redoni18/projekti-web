<?php
    session_start();
require_once '../controllers/DashboardController.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>About Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://use.fontawesome.com/b106d7266c.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/nav-style.css">
        <link rel="stylesheet" href="../css/about-us.css">
        <link rel="stylesheet" href="../css/footer.css">
    </head>
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
        <div class="about-us-container">
            <div style="margin-bottom: 20px;">
                <h2 style="text-align: center;">Who are we?</h2>
            </div>
            <div class="about-intro">
                <div class="about-info">
                    <h3 style="margin-bottom: 20px;">WE SELL THINGS!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                </div>
                <div class="about-team-pic" style="margin-right: 100px;">
                    <img src="../resources/about-us/team.jpg" alt="">
                </div>    
            </div>
            <div style="text-align: center; margin-top: 20px;">
                <h2>Our team</h2>
            </div>
            <div class="about-us-slider">
                <?php
                    $stafi = new DashboardController;
                    $allStaf = $stafi->readStaf();
                    if(!count($allStaf)){
                        echo '
                            <p>Staff is missing in database
                        ';
                    }else{
                        for($i=0;$i<count($allStaf);$i++){
                            echo '
    
                            
                                <div class="slider-content">
                                <img src=" '.$allStaf[$i]['staff_image'] .'">
                                <div class="team-description">
                                    <h2>'.$allStaf[$i]['staff_name'].'</h2>
                                    <h3>'.$allStaf[$i]['staff_position'].'</h3>
                                </div>
                                </div>                     
                            ';
                        }
                    }
                ?>    
                
                </div>    
        </div>

        <?php include '../components/footer.php'; ?>

        <script src="../menuToggler.js"></script>
    </body>
    <script src="../js/about-us-slider.js"></script>
</html>