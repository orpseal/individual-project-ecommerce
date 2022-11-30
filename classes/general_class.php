<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class contact_class extends db_connection
{
	//--INSERT--//
	//store contact method
	public function storeContact_cls($name,$phonenumber) 
	{
		//write query
		$sqlQuery="INSERT INTO phonebook VALUES ('', '$name' ,'$phonenumber')";

		//or
		//$sqlQuery="INSERT INTO phonebook ('pname, 'pphoned') VALUES('name','phonenumber');

		//exceutes query
		return $this->db_query($sqlQuery);
		
		
	
	}
	

	//--SELECT--//

	public function selectOneContact_cls($contactid)
	{
		//write a query
		$sqlQuery="SELECT * FROM `phonebook` WHERE pid =$contactid";

		//fetch one result
		return $this->db_fetch_one($sqlQuery);

	}

	//--SELECT ALL--//
	public function selectAllContacts_cls()
	{
		//write a query
		$sqlQuery="SELECT * FROM `phonebook`";

		//fetch all results
	
		return $this->db_fetch_all($sqlQuery);

	}




	//--UPDATE--//
	public function updateContact_cls($contactid, $name, $phonenumber)
	{
		//write a query
		$sqlQuery= "UPDATE `phonebook` SET ppname =$name AND pphoned =$phonenumber WHERE pid =$contactid ";

		//execute query
		return $this->db_query($sqlQuery);

	}



	//--DELETE--//
	public function deleteContact_cls($contactid)
	{
		//write a query
		$sqlQuery="DELETE FROM `phonebook` WHERE pid =$contactid";
	

		//execute query
		return $this->db_query($sqlQuery);

	}
	

}

?>