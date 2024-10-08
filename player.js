document.addEventListener('DOMContentLoaded', function () {
    const audioPlayers = document.querySelectorAll('audio');

    audioPlayers.forEach(player => {
        player.addEventListener('play', function () {
            // Check if the user is logged in
            const isLoggedIn = <?php echo json_encode(isset($_SESSION['username'])); ?>;

            if (!isLoggedIn) {
                // Prevent the audio from playing
                this.pause();
                this.currentTime = 0; // Reset time to the beginning
                alert('Please log in to play the songs.');
            }
        });
    });
});
