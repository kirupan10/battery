<?php
session_start();

function checkSessionTimeout() {
    $inactiveTimeout = 60; // 60 seconds of inactivity

    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $inactiveTimeout) {
        // Session has expired, destroy it
        session_unset();
        session_destroy();
        session_start(); // Optional: start a new session

        // Redirect to slider.php
        header('Location: slider.php');
        exit();
    }

    // Update last activity timestamp
    $_SESSION['last_activity'] = time();
}

// Call this function on every page where you want to check for session timeout
checkSessionTimeout();
?>