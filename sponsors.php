<?php
include "db.php";

$name = $_POST['name'];
$company = $_POST['company'];
$designation = $_POST['designation'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$linkedin = $_POST['linkedin'];
$type = $_POST['type'];
$amount = $_POST['amount'];

$sql = "INSERT INTO sponsors 
(name, company, designation, email, phone, linkedin, type, amount)
VALUES 
('$name','$company','$designation','$email','$phone','$linkedin','$type','$amount')";

if ($conn->query($sql)) {
    echo "Sponsor added successfully";
} else {
    echo "Error: " . $conn->error;
}
?>