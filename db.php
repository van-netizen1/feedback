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