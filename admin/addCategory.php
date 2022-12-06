<?php
session_start();
require("../controllers/products.controller.php");

if (!isset($_SESSION['cid'])) {
    header('location: ../view/login.php');
}

if (isset($_GET['logout'])) {
    unset($_SESSION['cid']);
    unset($_SESSION['success']);
    unset($_SESSION['role']);
    unset($_SESSION['name']);
    header("location: ../view/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Add Category</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/adminform.css">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <?php include('../controllers/admin_controller.php'); ?>

</head>

<body>
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>Admin<span>Dashboard</span></h3>
        </div>

        <!-- --------------------sidebar------------------------------- -->
        <div class="side-content">

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="index.php">
                            <span class="las la-home"></span>
                            <small>Users</small>
                        </a>
                    </li>
                    <li>
                        <a href="products.php">
                            <span class="las la-suitcase"></span>
                            <small>Products</small>
                        </a>
                    </li>
                    <li>
                        <a href="categories.php" class="active">
                            <span class="las la-window-maximize"></span>
                            <small>Categories</small>
                        </a>
                    </li>
                    <li>
                        <a href="brands.php">
                            <span class="las la-clipboard-list"></span>
                            <small>Brands</small>
                        </a>
                    </li>
                    <li>
                        <a href="orders.php">
                            <span class="las la-shopping-cart"></span>
                            <small>Orders</small>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>

    <!-- --------------------dashboard content / users ---------------- -->

    <!-- -----------------nav bar --------- -->
    <div class="main-content">

        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>

                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>

                    <div class="notify-icon">
                        <span class="las la-envelope"></span>
                        <span class="notify">4</span>
                    </div>

                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">3</span>
                    </div>

                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>

                        <span class="las la-power-off"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </header>

        <!-------------------------------------page content----------------------------------->
        <main>

            <div class="page-header">
                <h1>Categories</h1>
                <small>Home / Categories / Add Category</small>
            </div>

            <div class="container">

                <div class="admin-product-form-container">

                    <form action="../actions/addCategory_action.php" method="get">
                        <h3>Add new category</h3>

                        <input type="text" placeholder="enter category name" name="category_name" class="box">

                        <br><br>

                        <input type="submit" class="btn" name="submit" value="ADD">
                    </form>

                </div>

            </div>

        </main>

    </div>
</body>

</html>