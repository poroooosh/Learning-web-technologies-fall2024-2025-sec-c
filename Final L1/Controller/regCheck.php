<?php
    session_start();
    require_once('../Model/userModel.php');
    
    if(isset($_POST['submit'])){
        
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $password = trim($_POST['password']);
        

        if($username == null || $phone == null || empty($password) || empty($email)){
            echo "Null username/password/email!";

        }else {
            //$user = ['username'=> $username, 'password'=> $password, 'email'=> $email];
            //$_SESSION['user'] = $user;
            $status = addUser($username,$email, $phone, $password);
            if($status){
                header('location: ../View/login.html');
            }else{
                header('location: ../View/reg.html');
            }
        }
    }else{
        header('location: ../View/reg.html');
        exit;
    }

?>