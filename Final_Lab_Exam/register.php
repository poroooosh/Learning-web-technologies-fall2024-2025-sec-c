<?php
$servername = "localhost"; $username = "root"; $password = ""; $dbname = "webtech";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$contact_no = $_POST['contact_no'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$company_name= $_POST['company_name'];

$sql = "INSERT INTO employees (name, contact_no, username, password,company_name) VALUES ('$name', '$contact_no', '$username', '$password','$company_name')";

if ($conn->query($sql) === TRUE) {
    echo "New employee registered successfully";
    echo '<br><a href="login.html">LogIN</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

