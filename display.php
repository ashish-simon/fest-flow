<?php
$conn = new mysqli("localhost", "root", "", "mydb");

$result = $conn->query("SELECT * FROM users");

while($row = $result->fetch_assoc()) {
    echo "Name: " . $row['name'] . "<br>";
    echo "<img src='uploads/" . $row['image'] . "' width='200'><br><br>";
}

$conn->close();
?>