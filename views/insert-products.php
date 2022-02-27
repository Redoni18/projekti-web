<?php
    session_start();
    require_once '../controllers/DashboardController.php';

    $products = new DashboardController;

    if(isset($_POST['submit'])){
        $products->insertData($_POST);
    }
?>

<?php
    if (isset($_SESSION['roli']) && $_SESSION['roli']==1) {
?>
    <div>
    <form method="POST">
        Image:
        <input type="file" name="image">
        <br>
        Product name:
        <input type="text" name="name">
        <br>
        Product description:
        <textarea name="description" cols="30" rows="10"></textarea>
        <br>
        Product category:
        <select name="category" id="category">
            <option selected disabled hidden>Select a category</option>
            <option value="Technology">Technology</option>
            <option value="Sports&Entertainment">Sports&Entertainment</option>
            <option value="Apparel">Apparel</option>
            <option value="Home&Garden">Home&Garden</option>
        </select>
        <br>
        Quantity:
        <input type="number" name="quantity">
        <br>
        Price:
        <input type="number" step="0.01" name="price">
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>
<?php 
    }
?>