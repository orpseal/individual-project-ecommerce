<?php
include("../controllers/admin_controller.php");

if(isset($_GET['submit']))
{
    $category_name=$_GET['category_name'];

    //echo "$brand";
    $results = addCategory_ctr($category_name);

    if($results){
        header('Location: ../admin/addCategory.php');
    }else{
        echo "Please try again";
    }

}

