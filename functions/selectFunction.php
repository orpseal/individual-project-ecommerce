<?php
//Function calls the controller 

//This is a function for the select section
include('../controllers/general_controller.php');
//bootstrap cdn for table
include('../view/bootstrapcdn.php');


////create a function to call controller
function displaySelectedContacts()
{
    //call selectallcontacts controller
    $dataselected=selectAllContacts_ctr();

    echo 
    "<table class='table table-striped table-bordered p-5 m-5 w-50 h-50'>
    <thead>
        <tr>
        <th scope='col'>Name</th>
        <th scope='col'>Phone Number</th>
        <th scope='col'>Action</th>
   

        </tr>
    </thead>";

    //create a foreach loop and echo each row
    foreach($dataselected as $row )
    {
        //this echoes the name and the phone number separated by space.
        echo 
        "
        <tbody>
        <tr>
        <td> ".$row['pname']." </td>
        <td> ".$row['pphoned']."</td>
        <td>
        <a href='../actions/updateFormData.php?updateid=".$row['pid']."'
        class='btn btn-info'>
        <i class='fas fa-edit' style='font-size:24px'></i>
        </a>

        <a href='../functions/deleteFunction.php?deleteid=".$row['pid']."'
        class='btn btn-danger'>
        <i class='far fa-trash-alt' style='font-size:24px'></i>
        </a>
        </td>
      
        </tr>
        ";
       
        
    }

    echo  
    "
    </tbody>
    </table>
        
    "; 
}

//call function
displaySelectedContacts();



?>