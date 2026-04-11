<?php
include "db.php";

$id = $_POST['event_id'];
$suggestion = $_POST['suggestion'];

$sql = "INSERT INTO suggestions (event_id, suggestion)
VALUES ('$id','$suggestion')";

if ($conn->query($sql)) {
    echo "<script>
            alert('Suggestion added');
            window.location='view_events.php';
          </script>";
} else {
    echo "Error";
}
?>