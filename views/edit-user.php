<?php
    session_start();
require_once '../controllers/DashboardController.php';

$user = new DashboardController;
if(isset($_GET['id'])){
    $userId = $_GET['id'];
}


$currentUser = $user->editUser($userId);

if(isset($_POST['submit'])){
    $user->updateUser($_POST, $userId);

}
?>

<?php
    if (isset($_SESSION['roli']) && $_SESSION['roli']==1) {
?>
    <form method="POST">
    Email:   
    <input type="text" name="email" value="<?php echo $currentUser['email'];?>">
    <br>
    Username:
    <input type="text" name="username" value="<?php echo $currentUser['username'];?>">
    <br>
    Role:
    <input type="number" name="user_role" value="<?php echo $currentUser['user_role'];?>">
    <br>
    <input type="submit" name="submit" value="Update">
</form>
<?php 
    }
?>