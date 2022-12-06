<?php
include ("../settings/db_class.php");

class admin_class extends db_connection
{
    //-------------BRAND------------------//
//add brand
function addBrand_cls($brand_name){

    $sql = "INSERT INTO `brands` (`brand_name`) VALUES ('$brand_name')";

    return $this->db_query($sql);
}

//--SELECT--//
function selectBrand_cls(){
    $sql = "SELECT * FROM `brands`";
    return $this->db_fetch_all($sql);
}

//edit brand
function editBrand_cls($brand_id, $brand_name){
    $sql = "UPDATE `brands` SET brand_name = '$brand_name' WHERE brand_id = '$brand_id'";

    return $this->db_query($sql);
}

//delete brand
function deleteBrand_cls($brand_id){
    $sql = "DELETE FROM `brands` WHERE brand_id = '$brand_id'";

    return $this->db_fetch_all($sql);
}


// -------------------------------CATEGORY---------------------------------------------//
//add category
function addCategory_cls($category_name){

    $sql = "INSERT INTO `categories` (`cat_name`) VALUES ('$category_name')";

    return $this->db_query($sql);
}

//--SELECT--//
function selectCategory_cls(){
    $sql = "SELECT * FROM `categories`";
    return $this->db_fetch_all($sql);
}

function viewOneCategory_cls($category_id){
    $sql = "SELECT * FROM `categories` WHERE cat_id = '$category_id'";
    return $this->db_fetch_one($sql);
}

//edit category
function editCategory_cls($category_id, $category_name){
    $sql = "UPDATE `categoriess` SET cat_name = '$category_name' WHERE cat_id = '$category_id'";

    return $this->db_query($sql);
}

//delete category
function deleteCategory_cls($category_id){
    $sql = "DELETE FROM `categories` WHERE cat_id = '$category_id'";

    return $this->db_fetch_all($sql);
}

// ---------------------------------PRODUCTS--------------------------------//
public function selectAllProducts_cls()
	{
		$sqlQuery="SELECT * FROM `products`";

		//fetch all results
		return $this->db_fetch_all($sqlQuery);

	}
function addProduct_cls($product_category,$product_title,$product_price,$product_desc,$product_keywords,$product_brand,$product_image){
    $sql = "INSERT INTO `products` (`product_cat`,`product_title`,`product_price`,`product_desc`,`product_keywords`,`product_brand`,`product_image`) VALUES ('$product_category','$product_title','$product_price','$product_desc','$product_keywords','$product_brand','$product_image')";

    return $this->db_query($sql);
}

function viewOneProduct_cls($product_id){
    $sql = "SELECT * FROM `products` WHERE product_id = '$product_id'";
    return $this->db_fetch_one($sql);
}

function editProduct_cls($product_id,$product_category,$product_brand,$product_title,$product_price,$product_desc,$product_keywords,$product_image){
    $sql = "UPDATE `products` SET product_brand = '$product_brand', product_cat = '$product_category', product_title = '$product_title', product_price = '$product_price', product_desc = '$product_desc', product_keywords = '$product_keywords', product_image = '$product_image' WHERE product_id = '$product_id'";

    return $this->db->query($sql);
}


}