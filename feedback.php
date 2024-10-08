<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="feedback-bg">
    <header>
        <h1>Feedback</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="feedback.php">Feedback</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <main>
        <h2>Your Feedback Matters</h2>
        <form action="feedback_process.php" method="POST">
            <label for="message">Your Feedback:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <button type="submit">Submit Feedback</button>
        </form>
    </main>
</body>
</html>
