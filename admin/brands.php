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
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin.css">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <style>

    </style>
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
                        <a href="categories.php">
                            <span class="las la-window-maximize"></span>
                            <small>Categories</small>
                        </a>
                    </li>
                    <li>
                        <a href="brands.php" class="active">
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
                        <span class="user-msg">
                            <?php if (isset($_SESSION['name'])) : ?>
                                <strong>
                                    <?php echo $_SESSION['name']; ?>
                                </strong>
                            <?php endif ?>
                        </span>
                        <span>
                            <span>
                                <?php if (isset($_SESSION['name'])) : ?>
                                    <span class="las la-power-off"></span><a href="index.php?logout='1'" style="color: red;">Logout</a><!-- this logout the admin -->
                                <?php endif ?>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </header>

        <!-----------  -->
        <main>

            <div class="page-header">
                <h1>Brands</h1>
                <small>Home / Brands / Add Brand</small>
            </div>

            <div class="page-content">

                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <a href="addBrand.php" style="cursor: pointer;"><button>Add brand</button></a>
                        </div>

                        <div class="browse">
                            <input type="search" placeholder="Search" class="record-search">
                        </div>
                    </div>

                    <div>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><span class="las la-sort"></span> NAME</th>
                                    <th><span class="las la-sort"></span> ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#5033</td>

                                    <td>
                                        <h4>A Little Life</h4>
                                    </td>

                                    <td>
                                        <div class="add">
                                            <button>Edit brand</button>
                                        </div>
                                        <br>
                                        <div class="add">
                                            <button>Delete brand</button>
                                        </div>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </main>

    </div>
</body>

</html>