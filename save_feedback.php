<?php

include 'db.php';

$name = $_POST['name'];
$message = $_POST['message'];

$query = "INSERT INTO feedback (name, message)
VALUES ($1, $2)";

$result = pg_query_params(
    $conn,
    $query,
    array($name, $message)
);

if ($result) {

    echo "Feedback saved successfully!";

} else {

    echo "Error saving feedback.";

}

?>