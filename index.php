<?php
session_start();
include 'db_config.php'; // Include database configuration

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Fetch user's listening history
$username = $_SESSION['username'];
$historyQuery = "SELECT song_name FROM history WHERE username = '$username'"; // Adjust table/column names as needed
$historyResult = $conn->query($historyQuery);

// Fetch recommended songs (You can define your own logic here)
$recommendedQuery = "SELECT song_name FROM songs ORDER BY RAND() LIMIT 5"; // Example query to get random songs
$recommendedResult = $conn->query($recommendedQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to Music Player, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="feedback.php">Feedback</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <main>
        <h2>Play Your Favorite Music</h2>
        <div class="player">
            <audio id="audioPlayer" controls>
                <source src="songs/02_-_Oorikey_Ala.mp3" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
        </div>

        <h3>Your Listening History</h3>
        <ul>
            <?php if ($historyResult->num_rows > 0): ?>
                <?php while ($row = $historyResult->fetch_assoc()): ?>
                    <li><?php echo htmlspecialchars($row['song_name']); ?></li>
                <?php endwhile; ?>
            <?php else: ?>
                <li>No listening history available.</li>
            <?php endif; ?>
        </ul>

        <h3>Recommended Songs</h3>
        <ul>
            <?php if ($recommendedResult->num_rows > 0): ?>
                <?php while ($row = $recommendedResult->fetch_assoc()): ?>
                    <li><?php echo htmlspecialchars($row['song_name']); ?></li>
                <?php endwhile; ?>
            <?php else: ?>
                <li>No recommendations available.</li>
            <?php endif; ?>
        </ul>
    </main>
    <script src="player.js"></script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
