<?php 
include("db.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $skills = $_POST['skills'];

    $query = "INSERT INTO sponsors (name, roll_no, email, phone, department, skills)
        VALUES ('$name','$roll_no', '$email','$phone', '$department', '$skills')";

    if (mysqli_query($conn, $query)) {
        header("Location: view_volunteers.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Volunteer Registration</title>

<style>
body {
    font-family: Arial;
    background: #f4f6f9;
    text-align: center;
}

.container {
    width: 450px;
    margin: 40px auto;
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

h2 {
    margin-bottom: 10px;
}

p {
    font-size: 14px;
    color: #555;
}

input, select {
    width: 95%;
    padding: 10px;
    margin: 10px 0;
}

button {
    background: #007BFF;
    color: white;
    padding: 12px;
    border: none;
    width: 100%;
    font-size: 16px;
}
</style>
</head>

<body>

<div class="container">

<h2>Volunteer Registration</h2>

<p>Register as a volunteer to assist in guiding and supporting guests during the event.</p>

<form method="POST">

<label>Name:</label>
<input type="text" name="name" required>

<label>Roll Number:</label>
<input type="text" name="roll_no" required>

<label>Email:</label>
<input type="email" name="email" required>

<label>Phone:</label>
<input type="text" name="phone" required>

<label>Department:</label>
<input type="text" name="department" required>

<label>Skills:</label>
<input type="text" name="skills" placeholder="Communication, Management, etc">

<label>Availability:</label>
<select name="availability">
<option>Full Day</option>
<option>Morning</option>
<option>Afternoon</option>
</select>

<button type="submit">Register</button>

</form>

</div>

</body>
</html>
