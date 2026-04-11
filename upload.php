<?php
include ("db.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];

    $temp = $_FILES['image']['tmp_name'];
    $folder = "uploads/" . $image;

    move_uploaded_file($temp, $folder);

    $sql = "INSERT INTO events (name, image) VALUES ('$name','$image')";

    if ($conn->query($sql)) {
        echo "<script>
                alert('Uploaded Successfully');
                window.location='view_events.php';
            </script>";
    } else {
        echo "Error";
    }
}
?>