<?php
$conn = mysqli_connect("localhost:3308", "root", "", "fest_flow");

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
?>