<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback (message) VALUES ('$message')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Thank you for your feedback!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
