<?php
// include('../actions/signup.action.php');
session_start();
require("../controllers/products.controller.php");
function Redirect()
{
    header('location: login.php');
}
if (!isset($_SESSION['cid'])) {
    $_SESSION['msg'] = "You must log in first";
    Redirect();
}

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Arctic Books</title>

    <link rel="stylesheet" href="../css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <!-- ---------------header and navbar ---------------- -->
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="../images/newlogo.svg" width="125px"></a>
            </div>

            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="#">Contact</a></li>
                    <?php if (isset($_SESSION['name'])) : ?>
                        <li class="user-msg">
                            <strong>
                                <?php echo $_SESSION['name']; ?>
                            </strong>
                        </li>
                        <li><a href="products.php?logout='1'" style="color: red;">Logout</a></li><!-- this logout the admin -->
                    <?php endif ?>
                </ul>
            </nav>
            <a href="cart.php"><img src="../images/cart.png" width="30px" height="25px" ;></a>
            <img src="../images/menu.jpeg" class="menu-icon" onclick="menutoggle()">
        </div>


    </div>

    <!-- ---------------------All Books-------------------------- -->

    <div class="small-container">
        <div class="row row-2">
            <h2>All Books</h2>
            <select>
                <?php
                $categories = selectallcat_ctr();
                foreach ((array) $categories as $category) {
                    $title = $category['cat_name'];
                    $id = $category['cat_id'];
                    echo "<option value='$id'>$title</option>";
                } ?>
            </select>
        </div>

        <div class="row">
            <?php
            $products = viewallprod_ctr();
            foreach ((array) $products as $product) {
                $product_title = $product['product_title'];
                $pcat = $product['product_cat'];
                $pbrand = $product['product_brand'];
                $pprice = $product['product_price'];
                $pdesc = $product['product_desc'];
                $pkey = $product['product_keywords'];
                $product_image = $product['product_image'];
                echo "
                <div class='col-4'>
                <a href='product-details.php?product_id={$product['product_id']}'><img src='$product_image'></a>
                <h4>$product_title</h4>
                <div class='rating'>
                    <i class='fa fa-star' aria-hidden='true'></i>
                    <i class='fa fa-star' aria-hidden='true'></i>
                    <i class='fa fa-star' aria-hidden='true'></i>
                    <i class='fa fa-star' aria-hidden='true'></i>
                    <i class='fa fa-star-o' aria-hidden='true'></i>
                </div>
                <p>GHS $pprice</p>
            </div>";
            } ?>
            

            <!-- <div class="col-4">
                <img src="../images/books/book-of-the-night.jpeg">
                <h4>Book Of The Night</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>GHC 50.00</p>
            </div>  -->

            <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594;</span>
            </div>
        </div>

    </div>


    <!-- ----------------footer---------------- -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS mobile phone.</p>
                    <div class="app-logo">
                        <img src="../images/playstore.jpeg">
                        <img src="../images/appstore.png">
                    </div>
                </div>

                <div class="footer-col-2">
                    <img src="../images/blacknewlogo.svg">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Reading Accessible to Everyone</p>
                </div>

                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>FAQ</li>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                    </ul>
                </div>

                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - Booktique Ghana</p>
        </div>
    </div>

    <!-- ---------menu toggle js------ -->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

</body>

</html>