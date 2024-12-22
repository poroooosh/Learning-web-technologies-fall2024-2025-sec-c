<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        
        $username = trim($_POST['username']);
        $phone = trim($_POST['phone']);
        $password = trim($_REQUEST['password']);
        $email = trim($_REQUEST['email']);

        if($username == null || $phone == null || empty($password || empty($email))){
            echo "Null username/password/email!";

       /* }else {
            $user = ['username'=> $username, 'email'=> $email,'phone'=> $phone, 'password'=> $password];
            $_SESSION['user'] = $user;
            header('location: login.html');
        }*/
    }else{
        header('location: reg.html');
    }

?>