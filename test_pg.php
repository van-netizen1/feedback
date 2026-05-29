<?php

$conn = pg_connect("
    host=localhost
    port=5432
    dbname=testdb
    user=postgres
    password=yourpassword
");

if ($conn) {
    echo "Connected successfully!";
} else {
    echo "Connection failed!";
}

?>
