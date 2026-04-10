<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, password)
VALUES ('$name', '$email', '$password')";

if ($conn->query($sql)) {
    echo "Registration successful";
} else {
    echo "Error: " . $conn->error;
}
?>