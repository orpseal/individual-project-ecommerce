<?php
session_start();

require("../controllers/customers.controller.php");

try {
    if(isset($_POST['submit'])){
        $email = $_POST['customer_email'];
        $password=$_POST['customer_pass'];
        $UserExist = getCustomer_ctr($email, $password);
        CreateSession($UserExist);
      }
} catch (\Throwable $th) {
    //throw $th;
    echo 'Oops... Something went wrong!', $th;
}

function CreateSession ($Results){
    if($Results){
        $_SESSION['cid'] = $Results['customer_id'];
        $_SESSION['role'] = $Results['role'];
        $_SESSION['name'] = $Results['customer_name'];
    }
    useRoute();
}

function useRoute(){
    try {
        if(isset($_SESSION['userLogin'])){
            return require_once('../view/products.php');
        }
        return require_once('../view/login.php');
    } catch (\Throwable $th) {
        echo 'Oops... Something went wrong!', $th;
    }
}

?>