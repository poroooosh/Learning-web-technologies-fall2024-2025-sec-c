<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.html'); 
    }

    // Include database functions
    require_once '../Model/userModel.php';

    // Fetch all users using getUsers function from userModel
    function getUsers() {
        $conn = getConnection();
        $sql = "SELECT * FROM user"; // Use the correct table name
        $result = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
        $users = [];
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $users[] = $row;
            }
        }
        mysqli_close($conn);
        return $users;
    }

    // Fetch all users
    $users = getUsers();
?>

<html>
<head>
    <title>View Users</title>
</head>
<body>
        <h2>User List</h2>
        <a href='home.php'>Back </a> |
        <a href='../controller/logout.php'>Logout </a>

        <br>

        <table border=1>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php 
                foreach($users as $user){
            ?>
            <tr>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['phone']; ?></td>
                <td><?php echo $user['password']; ?></td>
                <td>
                    <a href="edit.php?email=<?php echo $user['email']; ?>"> EDIT </a> |
                    <a href="delete.php?email=<?php echo $user['email']; ?>"> DELETE </a> 
                </td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>
