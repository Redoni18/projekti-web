<?php
    require_once '../controllers/DashboardController.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://use.fontawesome.com/b106d7266c.js"></script>
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <h2 class="my-cart">Products Dashboard</h2>
        <div class="cart">
            <div class="cart-container">
                <table>
                    <thead>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Category</th>
                            <th>Product Quantity</th>
                            <th>Product Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $product = new DashboardController;
                            $allProducts = $product->readData();
                            foreach($allProducts as $product):
                        ?>
                        <tr>
                            <td>
                                <?php echo $product['product_image'] ?>
                            </td>
                            <td>
                            <?php echo $product['product_name'] ?>
                            </td>
                            <td>
                                <div class="cart-product-description">
                                    <p><?php echo $product['product_description'] ?></p>
                                </div>
                            </td>
                            <td width="100px">
                                <p><?php echo $product['product_category'] ?></p>
                            </td>
                            <td width="100px">
                                <p><?php echo $product['product_quantity'] ?></p>
                            </td>
                            <td width="100px">
                                <p><?php echo $product['product_price']?></p>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>