<?php
    require_once '../controllers/DashboardController.php';

    $products = new DashboardController;

    if(isset($_GET['id'])){
        $productId = $_GET['id'];
    }

    $currentProductId = $products->deleteData($productId);
?>
