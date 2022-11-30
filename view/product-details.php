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

<!-- ---------------------Single product details-------------------------- -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="../images/books/book-of-the-night.jpeg" width="100%">
            </div>
            <div class="col-2">
                <p>Home / Book</p>
                <h1>Book Of The Night</h1>
                <h4>GHC 50.00</h4>
                <select>
                    <option>Rent</option>
                    <option>Buy</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add To Cart</a>

                <h3>Book Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>In Charlie Hall world, shadows can be altered, for entertainment and cosmetic preferences—but also to increase power and influence. You can alter someones feelings—and memories—but manipulating shadows has a cost, with the potential to take hours or days from your life. Your shadow holds all the parts of you that you want to keep hidden—a second self, standing just to your left, walking behind you into lit rooms. And sometimes, it has a life of its own.</p>
            </div>
        </div>
    </div>

<!-- ----------------title--------------- -->

<div class="small-container">
    <div class="row row-2">
        <h2>Related Books</h2>
        <a href="products.php"><p>View More</p></a>
    </div>
</div>



<!-- -----------products------------ -->

    <div class="small-container">

        <div class="row">
            <div class="col-4">
                <img src="../images/books/book-of-the-night.jpeg">
                <h4>Book Of The Night</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>GHC 50.00</p>
            </div>

            <div class="col-4">
                <img src="../images/books/book-of-the-night.jpeg">
                <h4>Book Of The Night</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>GHC 50.00</p>
            </div>

            <div class="col-4">
                <img src="../images/books/book-of-the-night.jpeg">
                <h4>Book Of The Night</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>GHC 50.00</p>
            </div>

            <div class="col-4">
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

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px";
        }
        else
        {
            MenuItems.style.maxHeight = "0px";
        }
    }

</script>

</body>
</html>