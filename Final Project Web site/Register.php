<?php
// Start session
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include database connection file
    require 'db.php';

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];

    // Validate passwords
    if ($password != $confirm_password) {
        echo "Passwords do not match!";
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO admins (name, email, password, phone, role) VALUES ('$name', '$email', '$hashed_password', '$phone', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "success"; // Send success response
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
    <title>Admin Registration</title>
    <link rel="stylesheet" href="Admin_register.css">
    <link rel="shortcut icon" href="2.png"/>
</head>
<body>
    <form id="registrationForm" action="Register.php" method="post">
        <h2>Admin Registration</h2>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br><br><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
        <br><br><br>

        <label for="role">Role:</label>
        <input type="text" id="role" name="role" required>
        <br><br><br>

        <button type="submit">Register</button>
        <br>   
        <a href="Login.php">Already you have Account</a>

        <div></div>
    </form>
    <script >
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Create a new FormData object to hold form data
    let formData = new FormData(this);

    // Send the form data to the server using Fetch API
    fetch('Register.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data.includes('success')) {
            window.location.href = 'Login.php'; // Redirect to login page on success
        } else {
            alert(data); // Show error message
        }
    })
    .catch(error => console.error('Error:', error));
});

    </script>
</body>
</html>
