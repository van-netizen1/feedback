<?php

$conn = new mysqli("localhost", "root", "", "feedback_db");

if ($conn->connect_error) {
    die("Connection failed");
}

$name = $_POST['name'];
$message = $_POST['message'];

$sql = "INSERT INTO feedback (name, message)
VALUES ('$name', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback saved!";
} else {
    echo "Error";
}

$conn->close();

?>