<?php
//include the controller here to make action aware so method can be called
// include('../controllers/general_controller.php');
include('updateFormData.php');


//This page is collecting form data 


if(isset($_POST['submit']))
{
    $firstname=$_POST['firstname'];
    $phonenumber=$_POST['phonenumber'];

    // call a controller
    storeContact_ctr($firstname,$phonenumber);

}



//if update button is clicked

if (isset($_POST['update'])) {
    $contactid=$_POST['id'];
    $firstname=$_POST['firstname'];
    $phonenumber=$_POST['phonenumber'];
    # code...

    //call controller
    updateContact_ctr($contactid,$firstname,$phonenumber);
}







?>