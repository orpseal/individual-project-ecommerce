<?php

require("../controllers/customers.controller.php");
session_start();
$errors = array();

try {
    if (isset($_POST['user_login'])) {
        $email = $_POST['customer_email'];
        $password = $_POST['customer_pass'];
        $results = isValid($email, $password);
        if ($results) header('location: ../view/products.php');
        // debugging
    }
} catch (\Throwable $th) {
    //throw $th;
    echo 'Oops... Something went wrong!', $th;
}


function isValid($email, $password)
{
    global $errors;
    //  validation for login inputs
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) { // checks if no errors
        // check if no user has has same details(email)
        $results = ValidateCredentials_ctr($email, $password);
        if ($results == false) return array_push($errors, "User email Exist!");
        // if no errors then create Session & login
        echo $results;
        if ($results) {
            $_SESSION['cid'] = $results['customer_id'];
            $_SESSION['role'] = $results['user_role'];
            $_SESSION['name'] = $results['customer_name'];
        }
    }
}



// function CreateSession($Results)
// {
//     if ($Results) {
//         $_SESSION['cid'] = $Results['customer_id'];
//         $_SESSION['role'] = $Results['user_role'];
//         $_SESSION['name'] = $Results['customer_name'];
//     }
//     // RouteManager();
// }

// function RouteManager()
// {
//     try {
//         if (isset($_SESSION['userLogin'])) {
//             return require_once('../view/products.php');
//         }
//         return require_once('../view/login.php');
//     } catch (\Throwable $th) {
//         echo 'Oops... Something went wrong!', $th;
//     }
// }
