<?php

$connection = mysqli_connect("localhost", "root", "", "phpdb1");

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}


$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


$check_query = "SELECT * FROM userInfo WHERE email = '$email'";
$check_result = mysqli_query($connection, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    echo "Email already in use. <a href='register.html'>Try again</a>";
} else {

    $insert_query = "INSERT INTO userInfo (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($connection, $insert_query);
    echo "Registration successful. <a href='login.html'>Login</a>";
}

mysqli_close($connection);
?>