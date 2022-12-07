<?php

// include("../settings/core.php");
session_start();
require("../controllers/cart.controller.php");
if (isset($_GET['product_id'])) {
    //product id
    $p_id = $_GET['product_id'];
    //customer id
    $c_id = $_SESSION['cid']; //refactored == this works if user login (undefined if user not logined in)
    //client IP address
    $ip_add = $_SERVER['REMOTE_ADDR'];
    //quantity
    $qty = 1;
    echo "hello ", $p_id, " ", $c_id, " ", $ip_add, " ", $qty;
    //duplicate checker
    $result = addtocart_ctr($p_id, $ip_add, $c_id, $qty);
    if ($result) {
        header("location:../view/cart.php");
    } else {
        echo "fail";
    }
}





?>
<!--  $checkduplicate=duplicatecheck_ctr($p_id,$c_id);
     if($checkduplicate) {
      echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
      echo "The following errors occured<br><br>";
      echo $checkduplicate;
      echo "</div>";
     }else { -->