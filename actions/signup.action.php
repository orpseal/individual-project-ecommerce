<?php
session_start();

require("../controllers/customers.controller.php");

// init vars
$errors = array();
$confirm_password = $name = $email = $password = $country = $city = $contact = $userrole = "";

if (isset($_POST['submit'])) {
    $name = $_POST['customer_name'];
    $email = $_POST['customer_email'];
    $password = $_POST['customer_pass'];
    $confirm_password = $_POST['confirm_pass'];
    $country = $_POST['customer_country'];
    $city = $_POST['customer_city'];
    $contact = $_POST['customer_contact'];
    $userrole = 2;
    $isValid = ValidateInfo($name, $email, $password, $country, $city, $contact, $userrole, $confirm_password);
    if ($isValid) {
        $results = addCustomer_ctr($name, $email, $password, $country, $city, $contact, $userrole);
        if ($results) {
            $_SESSION['cid'] = $results['customer_id'];
            $_SESSION['role'] = $results['role'];
            $_SESSION['name'] = $results['customer_name'];
            header('location: ../view/login.php');
        }
    }
}

function ValidateInfo($name, $email, $password, $country, $city, $contact, $userrole, $confirm_password)
{
    global $errors;
    // form validation
    // error is push to $errors array
    if (empty($name)) {
        array_push($errors, "Username is required");
    } //empty checks if variable is empty
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if ($password != $confirm_password) {
        array_push($errors, "Passwords do not match");
    }
    // debugging
    // foreach ($errors as $key => $val) {
    //     echo $val;
    // }

    // check for errs
    if (count($errors) == 0) {
        // check if no user has has same details(email)
        $is_userExist = UserExist_ctr($email);
        if ($is_userExist == false) {
            return array_push($errors, "User email Exist!");
        }
        // if no errors then signup push input data to database
        return true;
    }
}
