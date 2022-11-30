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
                <a href="index.php"><img src="../images/newlogo-new.svg" width = "125px"></a>
            </div>

            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="../images/cart.png" width = "30px" height="25px";></a>
            <img src="../images/menu.jpeg" class="menu-icon" onclick="menutoggle()">
        </div>
    
    </div>


<!-- -----------cart items details--------- -->

<div class="small-container cart-page">
    <div class="checkout">
        <a href="products.php" class="btn">Conitnue Shopping</a>
    </div>

    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="../images/books/book-of-the-night.jpeg">
                </div>
                <div>
                    <p>Book Of The Night</p>
                    <small>Price: GHC 50.00</small>
                    <br>
                    <a href="">Remove</a>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>GHC 50.00</td>
        </tr>

        <tr>
            <td>
                <div class="cart-info">
                    <img src="../images/books/book-of-the-night.jpeg">
                </div>
                <div>
                    <p>Book Of The Night</p>
                    <small>Price: GHC 50.00</small>
                    <br>
                    <a href="">Remove</a>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>GHC 50.00</td>
        </tr>

        <tr>
            <td>
                <div class="cart-info">
                    <img src="../images/books/book-of-the-night.jpeg">
                </div>
                <div>
                    <p>Book Of The Night</p>
                    <small>Price: GHC 50.00</small>
                    <br>
                    <a href="">Remove</a>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>GHC 50.00</td>
        </tr>
    </table>

    <div class="total-price">
        <table>
            <tr>
                <td>Total</td>
                <td>GHC 150.00</td>
            </tr>
        </table>
    </div>

    <div class="checkout">
        <a href="" class="btn">Checkout</a>
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

</body>
</html>