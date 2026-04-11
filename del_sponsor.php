<?php
include("db.php");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM sponsors WHERE id=$id");

header("Location: view_sponsors.php");
?>