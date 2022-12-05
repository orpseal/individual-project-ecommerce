<?php
include('../actions/signup.action.php');
// on login screen, redirect to dashboard if already logged in
if (isset($_SESSION['name'])) {
    header('location: products.php');
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
                <a href="index.php"><img src="../images/newlogo-new.svg" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="#">Contact</a></li>
                    <!-- <li><a href="login.php">Login</a></li> -->
                </ul>
            </nav>
            <a href="cart.php"><img src="../images/cart.png" width="30px" height="25px" ;></a>
            <img src="../images/menu.jpeg" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
    <!-- -------------------login page------------------ -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="../images/bg-3osize.jpg" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <form action="../actions/login.action.php" method="POST" id="LoginForm">
                            <?php include('errors.php'); ?>
                            <input type="text" name="customer_email" placeholder="Email" value="<?php echo $email; ?>" required>
                            <input type="password" name="customer_pass" placeholder="Password" value="<?php echo $password; ?>" required>
                            <button type="submit" name="user_login" class="btn">Login</button>
                            <a href="">Forgot password</a>
                        </form>
                        <form action="../actions/signup.action.php" method="POST" id="RegForm">
                            <?php include('errors.php'); ?>
                            <input type="text" name="customer_name" placeholder="Name" value="<?php echo $name; ?>">
                            <input type="email" name="customer_email" placeholder="Email" value="<?php echo $email; ?>" required>
                            <input type="password" name="customer_pass" placeholder="Password" value="<?php echo $password; ?>" required>
                            <input type="password" placeholder="Confirm Password" name="confirm_pass" value="<?php echo $confirm_password; ?>" required>
                            <input type="text" placeholder="Country" name="customer_country" required>
                            <input type="text" placeholder="City" name="customer_city" required>
                            <input type="text" placeholder="Contact" name="customer_contact" required>
                            <button type="submit" name="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
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
                    <img src="../images/newlogo-black.png">
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
            <p class="copyright">Copyright 2022 - Arctic Books. Powered by Nirdteq Enterprise</p>
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

    <!-- ---------Form toggle js------ -->

    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
    </script>

</body>

</html>