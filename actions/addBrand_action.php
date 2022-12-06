<?php
include("../controllers/admin_controller.php");

if(isset($_GET['submit']))
{
    $brand_name=$_GET['brand_name'];

    //echo "$brand";
    $results = addBrand_ctr($brand_name);

    if($results){
        header('Location: ../admin/addBrand.php');
    }else{
        echo "Please try again";
    }

}

