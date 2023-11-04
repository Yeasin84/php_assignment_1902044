<?php
session_start();


$connection = mysqli_connect("localhost", "root", "", "phpdb1");

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}


$email = $_POST['email'];
$password = $_POST['password'];


$login_query = "SELECT * FROM userInfo WHERE email = '$email'";
$login_result = mysqli_query($connection, $login_query);

if (mysqli_num_rows($login_result) > 0) {
    $user = mysqli_fetch_assoc($login_result);
    if (password_verify($password, $userinfo['password'])) {

        $_SESSION['username'] = $userinfo['username'];
        header("Location: dashboard.php");
    } else {
        echo "Incorrect password. <a href='login.html'>Try again</a>";
    }
} else {
    echo "User not found. <a href='login.html'>Try again</a>";
}

mysqli_close($connection);
?>