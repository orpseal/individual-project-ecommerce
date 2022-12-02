<?php
/*
refactored codes
-----------------
This class contains the main / general class functions for CRUD
*/
//connect to database class
require("../settings/db_class.php");

class Products extends db_connection{
    public function AddItem($sql_query){
        return $this->db_query($sql_query);
    }
    public function ViewItem($tableName){
        $sql= "SELECT * FROM $tableName";
        return $this-> db_fetch_all($sql);
    }
    public function deleteOne($id,$tableName){
        $query = "DELETE FROM $tableName WHERE `product_id`= $id";
        return $this->db_query($query);
    }
}


class Categories extends Products{}
class Brands extends Products{}

?>