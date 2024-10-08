<?php
session_start(); // Start the session
include 'db_config.php'; // Include your database configuration file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize inputs to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Check if the user exists in the database
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    // If a user is found
    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        // Assuming passwords are hashed, you should verify the password
        if (password_verify($password, $user['password'])) {
            // Set session variable
            $_SESSION['username'] = $username;
            // Redirect to the dashboard or home page
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }
}

// Close the database connection
mysqli_close($conn);
?>
