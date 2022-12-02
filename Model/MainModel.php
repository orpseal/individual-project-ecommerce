<?php 

    class MainModel{
        public $db;

        public function CheckUserLogin($username,$password){
            $query = "SELECT * FROM users where username='{$username}' AND password='{$password}'";
            return $this->db->prepare($query)->execute();
        }
    }