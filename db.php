<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "feedback_db";
$port = 3307;

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<?php

$host = "localhost";
$port = "5432";
$dbname = "feedbackwall";
$user = "postgres";
$password = "07112006";

$conn = pg_connect(
    "host=$host port=$port dbname=$dbname user=$user password=$password"
);

if (!$conn) {

    die("Database connection failed.");

}

?>