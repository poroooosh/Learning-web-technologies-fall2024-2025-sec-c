
<?php
    session_start();
    if(isset($_REQUEST['submit'])){

        $email = trim($_POST['email']);
        $password = trim($_REQUEST['password']);

        if($email == null || empty($password)){
            echo "Null Email/password!";

        }else if ($_SESSION['user']['email'] == $email && $_SESSION['user']['password']== $password) {
            setcookie('status', 'true', time()+3000, '/');
            header('location: home.php');
        }else{
            echo "invalid user!";
        }
    }else{
        header('location: login.html');
    }

?>
