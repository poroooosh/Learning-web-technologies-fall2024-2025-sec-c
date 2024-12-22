<?php

function getConnection(){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'member');
    return $conn;
}

function login($email, $password){
    $conn = getConnection();
    $sql = "select * from user where email='{$email}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count ==1 ){
        return true;
    }else{
        return false;
    }
}


function addUser($username,$email,$phone, $password){
    $conn = getConnection();
    $sql ="INSERT INTO user (username, email, phone, password) VALUES ('{$username}', '{$email}', '{$phone}', '{$password}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

?>