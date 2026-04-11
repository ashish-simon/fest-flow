<?php
$conn = new mysqli("localhost", "root", "", "mydb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

$folder = "uploads/" . $image;

move_uploaded_file($tmp, $folder);

$sql = "INSERT INTO users (name, image) VALUES ('$name', '$image')";

if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully! <br><a href='index.html'>Go Back</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>