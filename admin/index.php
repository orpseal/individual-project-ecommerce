<?php
session_start();
require("../controllers/customers.controller.php");
function Redirect()
{
    header("location: ../view/login.php");
}
// if session doesnt exist restrict
if (!isset($_SESSION['cid'])) Redirect();
// if session exist & role ! 1 restrict 
if (isset($_SESSION['cid']) and (int) $_SESSION['role'] !== 1)
    Redirect();

// on click logout remove session & redirect
if (isset($_GET['logout'])) {
    unset($_SESSION['cid']);
    unset($_SESSION['success']);
    unset($_SESSION['role']);
    unset($_SESSION['name']);
    Redirect();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Dashboard</title>
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
                        <a href="index.php" class="active">
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
                <h1>Users</h1>
                <small>Home / Users</small>
            </div>

            <div class="page-content">

                <div class="records table-responsive">

                    <div class="record-header">

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
                                    <th><span class="las la-sort"></span> EMAIL</th>
                                    <th><span class="las la-sort"></span> COUNTRY</th>
                                    <th><span class="las la-sort"></span> CITY</th>
                                    <th><span class="las la-sort"></span> CONTACT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $customers = viewallcustomers_ctr();
                                foreach ((array) $customers as $customer) {
                                    $name = $customer['customer_name'];
                                    $email = $customer['customer_email'];
                                    $country = $customer['customer_country'];
                                    $city = $customer['customer_city'];
                                    $contact = $customer['customer_contact'];
                                    echo "
                                    <tr>
                                        <td>#5033</td>
                                        <td>
                                            <div class='client'>
                                                <div class='client-info'>
                                                    <h4>$name</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='client'>
                                                <div class='client-info'>
                                                    <h4>$email</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='client'>
                                                <div class='client-info'>
                                                    <h4>$country</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='client'>
                                                <div class='client-info'>
                                                    <h4>$city</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='client'>
                                                <div class='client-info'>
                                                    <h4>$contact</h4>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>";
                                }
                                ?>
                                <tr>
                                    <td>#5033</td>

                                    <td>
                                        <div class="client">
                                            <div class="client-info">
                                                <h4>Andrew Bruno</h4>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="client-info">
                                            <h4>andrew@gmail.com</h4>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="client-info">
                                            <h4>Ghana</h4>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="client-info">
                                            <h4>Tema</h4>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="client-info">
                                            <h4>0550159324</h4>
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