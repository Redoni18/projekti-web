<?php
require_once '../controllers/DashboardController.php';

$user = new DashboardController;

if(isset($_GET['id'])){
    $userId=$_GET['id'];
}

$user->deleteUser($userId);

?>