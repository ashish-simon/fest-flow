<?php
include "db.php";

$title = $_POST['title'];
$platform = $_POST['platform'];
$desc = $_POST['description'];
$budget = $_POST['budget'];
$date = $_POST['start_date'];
$status = $_POST['status'];

$sql = "INSERT INTO promotions (title, platform, description, budget, start_date, status)
VALUES ('$title','$platform','$desc','$budget','$date','$status')";

if ($conn->query($sql)) {
    echo "<script>
            alert('Promotion Added Successfully');
            window.location='promotions.html';
          </script>";
} else {
    echo "Error: " . $conn->error;
}
?>