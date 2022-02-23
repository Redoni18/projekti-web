<?php
    require_once '../controllers/DashboardController.php';

    $products = new DashboardController;
    if(isset($_GET['id'])){
        $productId = $_GET['id'];
    }

    $currentProduct = $products->editData($productId);

    if(isset($_POST['submit'])){
        $products->updateData($_POST, $productId);
    }

?>

<div>
    <form method="POST">
        Image:
        <input type="file" name="image" value="<?php echo $currentProduct['product_image']?>">
        <br>
        Product name:
        <input type="text" name="name" value="<?php echo $currentProduct['product_name']?>">
        <br>
        Product description:
        <textarea name="description" cols="30" rows="10"><?php echo $currentProduct['product_description'] ?></textarea>
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
        <input type="number" name="quantity" value="<?php echo $currentProduct['product_quantity']?>">
        <br>
        Price:
        <input type="number" name="price" value="<?php echo $currentProduct['product_price']?>">
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</div>