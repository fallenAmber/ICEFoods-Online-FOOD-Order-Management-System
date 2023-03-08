<?php
session_start();

// If the user is not logged in, redirect to the login page
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

// If the user is logged in, destroy the session and redirect to the login page
session_destroy();
header('Location: login.php');
exit;
