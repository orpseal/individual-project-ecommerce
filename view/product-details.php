<?php
session_start();
require("../controllers/products.controller.php");
$product_id = $_GET['product_id'];
$prod = viewoneprod_ctr($_GET['product_id']);
$brand = selectonebrand_ctr((int)$prod['product_brand']);
$cat = selectonecat_ctr((int)$prod['product_cat']);
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
                        <li><a href="products.php?logout='1'" style="color: red;">Logout</a></li>
                    <?php endif ?>
                    <?php if (!isset($_SESSION['name'])) : ?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif ?>
                </ul>
            </nav>
            <a href="cart.php"><img src="../images/cart.png" width="30px" height="25px" ;></a>
            <img src="../images/menu.jpeg" class="menu-icon" onclick="menutoggle()">
        </div>

    </div>

    <!-- ---------------------Single product details-------------------------- -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="<?php echo $prod['product_image'] ?>" alt="Generic placeholder image">
            </div>
            <div class="col-2">
                <p>Home / Book</p>
                <h1><?php echo $prod['product_title']; ?></h1>
                
                <p>
                    <?php
                    foreach ((array) $brand as $value) {
                        $brand_title = $value;
                        echo " $brand_title";
                    }
                    ?>
                </p>

                <p>
                    <?php
                    foreach ((array) $cat as $value) {
                        $cat_title = $value;
                        echo " $cat_title";
                    }
                    ?>
                </p>

                <h4>GHC <?php echo $prod['product_price']; ?></h4>
                <select>
                    <option>Rent</option>
                    <option>Buy</option>
                </select>
                <input type="number" value="1"></br>
                <?php
                echo "<a href='../actions/add.to.cart.php?product_id={$prod['product_id']}' type='submit' name='add-to-cart' class='btn'>Add to cart</a>";
                ?>
                <h3>Book Details <i class="fa fa-indent"></i></h3>
                <br>
                <p><?php echo $prod['product_desc']; ?></p>
            </div>
        </div>
    </div>

    <!-- ----------------title--------------- -->

    <div class="small-container">
        <div class="row row-2">
            <h2>Related Books</h2>
            <a href="products.php">
                <p>View More</p>
            </a>
        </div>
    </div>



    <!-- -----------products------------ -->

    <div class="small-container">

        <div class="row">
            <?php
            $products = viewallprod_ctr();
            $firstproducts = array_slice((array) $products, 0, 3);
            foreach ((array) $firstproducts as $product) {
                $product_id = $product['product_id'];
                $product_title = $product['product_title'];
                $pcat = $product['product_cat'];
                $pbrand = $product['product_brand'];
                $pprice = $product['product_price'];
                $pdesc = $product['product_desc'];
                $pkey = $product['product_keywords'];
                $product_image = $product['product_image'];
                echo "
                <div class='col-4'>
                <a href='product-details.php?product_id={$product_id}'><img src='$product_image'></a>
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