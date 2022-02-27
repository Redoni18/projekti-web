<?php
    session_start();
require_once '../controllers/DashboardController.php';

$stafi = new DashboardController;
if(isset($_GET['id'])){
    $stafiId = $_GET['id'];
}


$currentStafi = $stafi->editStaf($stafiId);

if(isset($_POST['submit'])){
    $stafi->updateStaf($_POST, $stafiId);

}
?>

<?php
    if (isset($_SESSION['roli']) && $_SESSION['roli']==1) {
?>
    <form method="POST">
    Image:
    <input type="file" name="image" value="<?php echo $currentStafi['staff_image'];?>">
    <br>
    Emri:
    <input type="text" name="name" value="<?php echo $currentStafi['staff_name'];?>">
    <br>
    Position:
    <input type="text" name="position" value="<?php echo $currentStafi['staff_position'];?>">
    <br>
    <input type="submit" name="submit" value="Update">
</form>
<?php 
    }
?>

