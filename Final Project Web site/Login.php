<?php
// Start session
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include database connection file
    require 'db.php';

    // Get form data
    $name = $_POST['name'];
    $password = $_POST['password'];


    

    // Fetch user from database
    $sql = "SELECT * FROM admins WHERE name = '$name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['admin_name'] = $user['name'];
            //$_SESSION['admin_role'] = $user['role'];

            echo "success";
            header("Location: Admins.php");
            exit();
             
        // Send success response
    } else {
        // Debugging: Log invalid password
        error_log("Invalid password");

        echo "Invalid password!";
    }
} else {
    // Debugging: Log no user found
    error_log("No user found ");

    echo "No user found ";
}

    // Close the connection
    $conn->close();
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="Admin_Login.css">  
</head>
<body>
    
    <form id="loginForm" action="Login.php" method="post">
        <h2>Admin Login</h2>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br><br>

        <button type="submit">Login</button>
    </form>





</body>
</html>
