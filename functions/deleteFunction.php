<?php

//include the controller here to make action aware so method can be called
include('../controllers/general_controller.php');


if(isset($_GET['deleteid'])) {
    # code...
    $contactid=$_GET['deleteid'];

    //call controller
    deleteContact_ctr($contactid);
}

else 
{
    echo "Issue";
}



?>