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
        <script src="https://kit.fontawesome.com/48f64fcddf.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <nav class="navbar">
        <div class="container">
            <div class="logo">
            Admin Page
            </div>
            <ul class="nav">
            <li><a href="./productDashboard.php">Products</a></li>
            <li><a href="./stafiDashboard.php">Stafi</a></li>
            <li><a href="./userDashboard.php">Users</a></li>
            <li><a href="./messagesDashboard.php">Messages</a></li>
            </ul>
        </div>
        </nav>
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
                            <th>Edit / Delete</th>
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
                            <p class="name"><?php echo $product['product_name'] ?></p>
                            </td>
                            <td>
                                <div class="cart-product-description">
                                    <p class"description"><?php echo $product['product_description'] ?></p>
                                </div>
                            </td>
                            <td>
                                <p><?php echo $product['product_category'] ?></p>
                            </td>
                            <td width="80px">
                                <p><?php echo $product['product_quantity'] ?></p>
                            </td>
                            <td width="80px">
                                <p><?php echo $product['product_price']?></p>
                            </td>
                            <td width="80px"><a href="edit-product.php?id=<?php echo $product['Id'];?>"><i class="fa-solid fa-pen-to-square"></i></a> | <a href="delete-product.php?id=<?php echo $product['Id'];?>"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a href="insert-products.php" class="insert-data">Insert a product</a>
        <a class="redirect" href="../index.php" class="insert-data">Go to website</a>

        <style>


            .insert-data{
                margin-left:20px;
                background: #333;
                color: white;
                padding: 10px;
                border-radius: 15px;
            }

            .redirect{
                margin-left:20px;
                background: #00ff48;
                color: #333;
                padding: 10px;
                border-radius: 15px;
            }

            p {
                width: 200px%;
            }

            .name{
                word-break: break-all;
            }

            .description{
                word-break: break-all;
            }
        </style>
    </body>
</html>