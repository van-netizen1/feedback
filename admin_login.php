<?php
session_start();

$user = "owner";
$pass = "strongpassword123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $user && $password === $pass) {

        $_SESSION['admin'] = true;

        header("Location: admin_dashboard.php");
        exit();

    } else {

        echo "<script>
            alert('Wrong username or password');
            window.location.href='index.php';
        </script>";
    }
}
?>