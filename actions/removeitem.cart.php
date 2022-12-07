<?php
include("../controllers/cart.controller.php");
include("../settings/core.php");



if (isset($_GET['deletecart'])) {
    $p_id = $_GET['deletecart'];
    $c_id = $_SESSION['cid'];
    $check = removefromcart_ctr($p_id, $c_id);

    //    echo"$check";

    if ($check) {
        header("location:../view/cart.php");
    } else {
        echo "Not removed from cart";
    }
}
