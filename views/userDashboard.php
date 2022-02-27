<?php
    session_start();
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
    <?php
        if (isset($_SESSION['roli']) && $_SESSION['roli']==1) {
        ?>
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
        <h2 class="my-cart">User Dashboard</h2>
        <div class="cart">
            <div class="cart-container">
                <table>
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Username</th>
                            <!-- <th>Password</th> -->
                            <th>Role</th>
                            <th>Edit / Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                            $user = new DashboardController;
                            $allUsers = $user->readUser();
                            foreach($allUsers as $user):
                        ?>
                        <tr>
                            <td>
                                <?php echo $user['email'] ?>
                            </td>
                            <td>
                                <?php echo $user['username'] ?>
                            </td>
                            <td>
                                <?php echo $user['user_role'] ?>
                            </td>
                            <td width="80px"><a href="edit-user.php?id=<?php echo $user['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a> | <a href="delete-user.php?id=<?php echo $user['id'];?>"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="redirect" href="../index.php" class="insert-data">Go to website</a>
    <?php
        }else{
    ?>  
        <div style="margin: 10px;">
            <h1 style="font-family: times new roman;font-size: 60px;">Error 403</h1>
            <h1 style="font-family: times new roman;font-size: 60px;">Kqyr me sy e sosht per ty</h1>
        </div>
    <?php
        }
    ?>

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