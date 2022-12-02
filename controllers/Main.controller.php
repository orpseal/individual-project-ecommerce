<?php
session_start();
class MainController{
    public $model;
    public function getAction(){

        if(isset($_POST['LoginSubmit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $checkUserLogin = $this->model->CheckUserLogin($username,$password);
            if($checkUserLogin == 1){
                $_SESSION['userLogin']=1;

            }
        }
        $this->useRoute();
    }

    public function useRoute(){
        if(isset($_SESSION['userLogin'])){
            return require_once('../view/products.php');
        }
        return require_once('../view/login.php');
    }
}

?>