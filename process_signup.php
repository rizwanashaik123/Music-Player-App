<?php
session_start();
include('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user into database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['signup_success'] = "Account created successfully!";
        header("Location: signup.php"); // Redirect to the signup page (or your desired page)
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
