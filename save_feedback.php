<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $message = trim($_POST['message']);

    if ($message == "") {
        echo "
        <script>
            alert('Message cannot be empty.');
            window.location.href='index.php';
        </script>
        ";
        exit();
    }

    $sql = "INSERT INTO feedback (name, message)
            VALUES (?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ss", $name, $message);

    mysqli_stmt_execute($stmt);

    echo "
    <script>
        alert('Feedback Submitted!');
        window.location.href='index.php';
    </script>
    ";

}
?>