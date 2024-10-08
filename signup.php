<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Create an Account</h1>
    </header>

    <main>
        <form action="process_signup.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </main>

    <script>
        <?php
        if (isset($_SESSION['signup_success'])) {
            echo "alert('".$_SESSION['signup_success']."');";
            unset($_SESSION['signup_success']); // Clear the session variable
        }
        ?>
    </script>
</body>
</html>
