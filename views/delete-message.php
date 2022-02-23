<?php 
    require_once '../controllers/DashboardController.php';

    $messages = new DashboardController;
    if(isset($_GET['id'])){
        $messageId = $_GET['id'];
    }
    
    $currentMessageId = $messages->deleteMessage($messageId);
?>