<?php
include "db.php";

$name = $_POST['name'];
$roll = $_POST['roll_no'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dept = $_POST['department'];
$skills = $_POST['skills'];
$avail = $_POST['availability'];

$sql = "INSERT INTO volunteers 
(name, roll_no, email, phone, department, skills, availability)
VALUES 
('$name','$roll','$email','$phone','$dept','$skills','$avail')";

if ($conn->query($sql)) {
    echo "Volunteer Registered Successfully";
} else {
    echo "Error: " . $conn->error;
}
?>