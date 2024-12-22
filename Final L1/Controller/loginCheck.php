<?php
    session_start();
    //include('../model/userModel.php');
    //include_once('../model/productModel.php');
    //require('../model/productModel.php');
    require_once('../Model/userModel.php');

    if(isset($_REQUEST['submit'])){

        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if($email == null || empty($password)){
            echo "Null email/password!";
        }else {
            $status = login($email, $password);
            if($status){
                setcookie('status', 'true', time()+3000, '/');
                header('location: ../view/home.php');
            }else{
                echo "Invalid user!";
            }
        }
    }else{
        header('location: ../view/login.html');
    }

?>