<?php
include("../settings/db_class.php");


class customer_class extends db_connection
{
	function addCustomer_cls($fullname, $email, $password, $country, $city, $contactnumber, $userrole)
	{
		//write sql 
		// 2nd way of writing insert query
		$finalpassword = password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO `customer` (`customer_name`,`customer_email`,`customer_pass`,`customer_country`,`customer_city`,`customer_contact`,`user_role`) 
        VALUES ('$fullname','$email','$finalpassword','$country','$city' ,'$contactnumber','$userrole')";
		return $this->db_query($sql);
	}


	function viewcustomer_cls()
	{
		$sql = "SELECT * FROM `customer`";
		return $this->db_fetch_all($sql);
	}


	function deletecustomer_cls($customer_id)
	{
		$sql = "DELETE FROM `customer` WHERE `customer_id`='$customer_id'";
		return $this->db_fetch_all($sql);
	}

	function viewonecustomer_cls($customer_id)
	{
		$sql = "SELECT * FROM `customer` WHERE customer_id='$customer_id'";
		return $this->db_fetch_one($sql);
	}
	// refactored --- nird
	/* checks if user Exists */
	function isCustomerExist_cls($email)
	{
		$sql = "SELECT * FROM customer WHERE customer_email='$email' LIMIT 1";
		return $this->db_fetch_one($sql);
	}
	/* checks if user credentials valid */
	function customer_login_cls($email)
	{
		$sql = "SELECT * FROM customer WHERE customer_email ='{$email}'";
		return $this->db_fetch_one($sql);
	}
	//======
	function editcus_cls($customer_id, $customer_name, $customer_email, $customer_country, $customer_city, $customer_contact)
	{
		$sql = "UPDATE `customer` SET customer_name = '$customer_name', customer_email= '$customer_email',customer_country= '$customer_country', 
		customer_city= '$customer_city',customer_contact= '$customer_contact'
		WHERE customer_id = '$customer_id'";
		return $this->db_query($sql);
	}
}
