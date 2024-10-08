<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="contact-bg">
    <header>
        <h1>Contact Us</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="feedback.php">Feedback</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <main>
        <h2>We'd love to hear from you!</h2>
        <p>If you have any questions or feedback, feel free to reach out.</p>
        <form action="contact_process.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>
