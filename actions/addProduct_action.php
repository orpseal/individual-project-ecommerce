<?php 
include("../controllers/admin_controller.php");

if(isset($_POST['submit'])){
    $product_category = $_POST['product_category'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $product_brand = $_POST['product_brand'];
    $product_image = $_FILES['product_image']['name'];
    
    $targetdir = "../images/products/";
    $image = $targetdir . $product_image;
    $file = '../images/products/' .basename($_FILES["product_image"]["name"]);

    move_uploaded_file($_FILES["product_image"]["tmp_name"],$file);

    $result = addProduct_ctr($product_category,$product_title,$product_price,$product_desc,$product_keywords,$product_brand,$product_image);

    if($result){
        if(move_uploaded_file($_FILES["product_image"]["tmp_name"], "../images/products/".$_FILES["product_image"]["name"])){
            echo "success";
        }else{
            echo "fail";
        }
        header("Location:../admin/addProduct.php");
    }else{
        header("Location:../admin/addProduct.php");
    }
}