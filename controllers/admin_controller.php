<?php

require "../classes/admin_class.php";

//--ADD--//
function addBrand_ctr($brand_name){
    $add_brand = new admin_class();

    return $add_brand->addBrand_cls($brand_name);
}

//--SELECT--//
function selectAllBrands_ctr(){
    $selectallbrands = new admin_class();
    return $selectallbrands->selectBrand_cls();
}

//delete brand
function deleteOneBrand_ctr($brand_id){
    $selectonebrand = new admin_class();
    return $selectonebrand->deleteBrand_cls($brand_id);
}

//edit brand
function editBrand_ctr($brand_id,$brand_name){
    $selectonebrand = new admin_class();
    return $selectonebrand->editBrand_cls($brand_id,$brand_name);
}

// function selectOneBrand_ctr($email){
//     $select_one_customer = new customer_class();

//     return $select_one_customer->login_cls($email);
// }

// ---------------CATEGORIES-----------------------//
//--ADD--//
function addCategory_ctr($category_name){
    $add_category = new admin_class();

    return $add_category->addCategory_cls($category_name);
}

//--SELECT--//
function selectAllCategory_ctr(){
    $selectallcategories = new admin_class();
    return $selectallcategories->selectCategory_cls();
}

function viewOneCategory_ctr($category_id){
    $selectonecategory = new admin_class();
    return $selectonecategory->viewOneCategory_cls($category_id);
}

//delete brand
function deleteOneCatrgory_ctr($brand_id){
    $selectonebrand = new admin_class();
    return $selectonebrand->deleteBrand_cls($brand_id);
}

//edit brand
function editCategory_ctr($category_id,$category_name){
    $selectonecategory = new admin_class();
    return $selectonecategory->editcategory_cls($category_id,$category_name);
}

// -------------------PRODUCTS-----------------------//
function selectAllProducts_ctr(){
    $selectedProducts=new admin_class();

    //run method
    return $selectedProducts->selectAllProducts_cls();
}

function addProduct_ctr($product_category,$product_title,$product_price,$product_desc,$product_keywords,$product_brand,$product_image){
    $add_product = new admin_class();
    return $add_product->addProduct_cls($product_category,$product_title,$product_price,$product_desc,$product_keywords,$product_brand,$product_image);
}

function viewOneProduct_ctr($product_id){
    $viewoneprod = new admin_class();
    return $viewoneprod->viewOneProduct_cls($product_id);
}

function editProduct_ctr($product_id,$product_category,$product_brand,$product_title,$product_price,$product_desc,$product_keywords,$product_image){
    $editproduct = new admin_class();
    return $editproduct->editProduct_cls($product_id,$product_category,$product_brand,$product_title,$product_price,$product_desc,$product_keywords,$product_image);
}