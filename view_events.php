<?php
include "db.php";
$result = $conn->query("SELECT * FROM events");
?>

<!DOCTYPE html>
<html>
<head>
<title>Event Gallery</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style>
body {
    font-family: Arial;
    background: #f4f6f9;
    text-align: center;
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.card {
    width: 300px;
    margin: 20px;
    background: white;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 4px 8px gray;
}

img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

textarea {
    width: 100%;
    margin-top: 10px;
}

button {
    margin-top: 10px;
}
</style>

</head>

<body>
    <!-- Heading -->
    <div class="heading">
        <h1>Fest Flow</h1>
    </div>
	<div class="menu">
        <a href="dashboard.html">Home</a>
        <a href="themes.html">Upload Image</a>
        <a href="add_sponsors.php">Sponsors</a>
        <a href="view_sponsors.php">View Sponsors</a>
        <a href="event_order.html">Events</a>
    </div>

    <!-- Dashboard -->
    <br>

<h2>Event Gallery</h2>

<div class="container">

<?php
while($row = $result->fetch_assoc()) {

echo "<div class='card'>";
echo "<h3>".$row['name']."</h3>";
echo "<img src='uploads/".$row['image']."'>";

echo "<form action='suggestion.php' method='POST'>";
echo "<input type='hidden' name='event_id' value='".$row['id']."'>";
echo "<textarea name='suggestion' placeholder='Give suggestion...' required></textarea>";
echo "<button type='submit' name='submit'>Submit</button>";
echo "</form>";


// SHOW SUGGESTIONS
$id = $row['id'];
$sugg = $conn->query("SELECT * FROM suggestions WHERE event_id='$id'");

while($s = $sugg->fetch_assoc()) {
    echo "<p style='text-align:left;'>💬 ".$s['suggestion']."</p>";
}

echo "</div>";
}
?>

</div>

</body>
</html>