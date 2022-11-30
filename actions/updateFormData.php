<?php
//function calls the controller
include('../controllers/general_controller.php');
include('../view/bootstrapcdn.php');



if(isset($_GET['updateid'])){
    $contactid=$_GET['updateid'];

   
    

    //call controller
   $selectedOne=selectOneContact_ctr($contactid);

   $firstname=$selectedOne['pname'];
   $phonenumber=$selectedOne['pphoned'];

   

   //repeat form data
   echo 
   "
   <form action='formData.php'method='POST'>
   <input type='hidden' name='id' value=".$contactid.">
  <div class='form-group p-3'>
    <label for='name'>Name:</label>
    <input type='name' class='form-control w-25 p-3' name='firstname' placeholder='Enter email' value=".$firstname.">

  </div>
  <div class='form-group p-3'>
    <label for='telephone'>Telephone:</label>
    <input type='tel' class='form-control w-25 p-3'  placeholder='Phone Number' name='phonenumber' value=".$phonenumber.">
  </div>
  
  <!--bootstrap padding p-3 used for space-->
  <div class='form-group p-3'>
  <button type='submit' name='update' class='btn btn-info w-25'>Update</button>
  </div>

";
  



}














?>