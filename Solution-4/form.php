<?php

$connection = mysqli_connect("localhost", "root", "", "phpAssignment");


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];


$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";


if ($connection->query($sql) === TRUE) {
    echo "Registration successful. Your information has been saved.";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}


$connection->close();
?>