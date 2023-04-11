<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: q10a.php");
    exit();
}

// Welcome the user
echo "Welcome " . $_SESSION['username'] . "!";
?>
