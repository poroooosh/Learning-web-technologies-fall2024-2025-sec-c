<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'user') {
    header("Location: login.php");
    exit;
}
?>


<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome, User <?php echo $_SESSION['username']; ?>!</h1>
    <a href="profile.php">Profile</a><br>
    <a href="change_password.php">Change Password</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>