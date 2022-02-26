<?php
require_once '../controllers/DashboardController.php';

$stafi = new DashboardController;

if(isset($_GET['id'])){
    $stafiId=$_GET['id'];
}

$stafi->deleteStaf($stafiId);

?>