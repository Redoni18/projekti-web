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
            <li><a href="#">Users</a></li>
            <li><a href="./messagesDashboard.php">Messages</a></li>
            </ul>
        </div>
        </nav>
        <h2 class="my-cart">Messages Dashboard</h2>
        <div class="cart">
            <div class="cart-container">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $messages = new DashboardController;
                            $allMessages = $messages->readMessages();
                            foreach($allMessages as $message):
                        ?>
                        <tr>
                            <td>
                                <?php echo $message['sender_name'] ?>
                            </td>
                            <td>
                            <p class="name"><?php echo $message['sender_email'] ?></p>
                            </td>
                            <td>
                                <div class="cart-product-description">
                                    <p class"description"><?php echo $message['sender_message'] ?></p>
                                </div>
                            </td>
                            <td width="80px"><a href="delete-message.php?id=<?php echo $message['Id'];?>"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="redirect" href="../index.php" class="insert-data">Go to website</a>

        <style>
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