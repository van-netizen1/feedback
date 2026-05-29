<?php
session_start();

if (!isset($_SESSION['admin'])) {
    die("Access denied");
}

echo "Welcome Admin!";

// here you can show all feedback + delete buttons
?>