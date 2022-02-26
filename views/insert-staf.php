<?php
    require_once '../controllers/DashboardController.php';

    $stafi = new DashboardController;

    if(isset($_POST['submit'])){
        $stafi->insertStaf($_POST);
    }
?>


<div>
    <form method="POST">
        Image:
        <input type="file" name="image">
        <br>
        Staff name:
        <input type="text" name="name">
        <br>
        Staff position:
        <input type="text" name="position">
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>