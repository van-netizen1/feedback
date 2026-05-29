<?php
session_start();

if (!isset($_SESSION['admin'])) {
    die("Access Denied");
}
?>

<h1>Admin Dashboard</h1>

<a href="logout.php">Logout</a>

<hr>

<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM feedback ORDER BY id DESC");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div style='border:1px solid #ccc; margin:10px; padding:10px'>";
    echo "<b>Name:</b> " . htmlspecialchars($row['name']) . "<br>";
    echo "<b>Message:</b> " . htmlspecialchars($row['message']) . "<br>";
    echo "</div>";
}
?>