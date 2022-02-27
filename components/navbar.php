<nav>
    <ul class="nav-list" id="menu-items">
        <?php 
            if(!isset($_SESSION['roli'])){
        ?>  
            <li><a href="../pages/index.php">Home</a></li>
            <li><a href="../pages/login.php">Account</a></li>
        <?php
            }
        ?>
        <?php
        if(isset($_SESSION['roli']) && isset($_SESSION['username'])){
        ?>
            <li><a href="../pages/index.php">Home</a></li>
            <div class="dropdown">
            <li class="dropbtn">Products</li>
            <div class="dropdown-content">
                <a href="../pages/technology.php">Technology</a>
                <a href="../pages/apparel.php">Apparel</a>
                <a href="../pages/sports&entertainment.php">Sports & Entertainment</a>
                <a href="../pages/home&garden.php">Home & Garden</a>
            </div>
            </div>  
            <li><a href="../pages/about-us.php">About us</a></li>
            <li><a href="../pages/contact-us.php">Contact us</a></li>
            <?php
                if ($_SESSION['roli']==1) {
                    ?>
                    <li><a href="../views/productDashboard.php">Admin Page</a></li>
                    <li><a href="../views/logout.php">Logout</a></li>
                <?php
                }
            ?>
            <?php
                if ($_SESSION['roli']==2) {
                    ?>
                    <li><a href="../views/logout.php">Logout</a></li>
                <?php
                }
            ?>
        <?php
        }
        ?>
    </ul>
</nav>