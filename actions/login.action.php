<?php

require("../controllers/customers.controller.php");
session_start();
$errors = array();

if (isset($_POST['user_login'])) {
    $email = $_POST['customer_email'];
    $password = $_POST['customer_pass'];
    isValid($email, $password);
}
//throw $th;


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
        // check if no user has the same details(email)
        $results = ValidateCredentials_ctr($email, $password);
        if ($results == false) return array_push($errors, "Credentials not valid!");
        // if no errors then create Session & login
        $_SESSION['cid'] = $results['customer_id'];
        $_SESSION['success'] = "";
        $_SESSION['role'] = $results['user_role'];
        $_SESSION['name'] = $results['customer_name'];
        header('location: ../view/products.php');
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
