<?php 
include("db.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $linkedin = $_POST['linkedin'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];

    $query = "INSERT INTO sponsors (name, company, designation, email, phone, linkedin, type, amount)
        VALUES ('$name','$company','$designation','$email','$phone','$linkedin','$type','$amount')";

    if (mysqli_query($conn, $query)) {
        header("Location: view_sponsors.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Smart Event - Sponsors</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style>
body {
    font-family: Arial;
    margin: 0;
    background: #f4f6f9;
}

/* HEADER */
.header {
    background: #f2f2f2;;
    color: #2C3E50;
    padding: 15px;
    text-align: center;
    font-size: 22px;
    font-weight: bold;
}

/* MAIN CENTER */
.main {
    width: 600px;
    margin: 30px auto;
}

/* FORM */
.form-section {
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}

.form-section h2 {
    text-align: center;
}

/* LABELS */
label {
    display: block;
    margin-top: 12px;
    font-weight: bold;
}

/* INPUTS */
input, select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

/* BUTTON */
button {
    width: 100%;
    padding: 10px;
    margin-top: 15px;
    background: #3498db;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

/* SEARCH */
.search-box {
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

/* SUMMARY */
.summary {
    margin-top: 10px;
    background: white;
    padding: 10px;
    border-radius: 8px;
    text-align: center;
    font-weight: bold;
}

/* CARDS */
.card-container {
    margin-top: 15px;
}

.card {
    background: white;
    padding: 15px;
    border-radius: 10px;
    border-left: 5px solid #3498db;
    margin-bottom: 15px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    position: relative;
}

/* TYPE COLORS */
.gold { border-left-color: gold; }
.silver { border-left-color: silver; }
.bronze { border-left-color: #cd7f32; }

/* IMAGE */
.card img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

/* DELETE */
.delete-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: red;
    color: white;
    border: none;
    padding: 5px;
    cursor: pointer;
}
</style>

</head>

<body>
    <div class="heading">
        <h1 align = "center">Fest Flow</h1>
    </div>
	<div class="menu">
        <a href="dashboard.html">Home</a>
        <a href="themes.html">Upload Image</a>
        <a href="view_events.php">Suggest Theme</a>
        <a href="view_sponsors.php">View Sponsors</a>
        <a href="event_order.html">Events</a>
    </div>

    <!-- Dashboard -->
    <br>

<div class="header">
Smart Event Management - Sponsors
</div>

<div class="main">

    <!-- FORM -->
    <div class="form-section">
        <h2>Add Sponsor</h2>

        <form method="POST">

            <label>Sponsor Name:</label>
            <input type="text" name="name" required>

            <label>Company:</label>
            <input type="text" name="company" required>

            <label>Designation:</label>
            <input type="text" name="designation" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Phone:</label>
            <input type="text" name="phone" required>

            <label>LinkedIn:</label>
            <input type="text" name="linkedin">

            <label>Type:</label>
            <select name="type" required>
                <option>Gold</option>
                <option>Silver</option>
                <option>Platinum</option>
            </select>

            <label>Amount:</label>
            <input type="number" name="amount" required>

            <button type="submit" name = "submit">Add Sponsor</button>
        </form>

    </div>
</div>

<script>
document.getElementById("form").onsubmit = function(e) {
    e.preventDefault();

    var name = document.getElementById("name").value;
    var company = document.getElementById("company").value;
    var designation = document.getElementById("designation").value;
    var mail = document.getElementById("mail").value;
    var phone = document.getElementById("phone").value;
    var linkedin = document.getElementById("linkedin").value;
    var type = document.getElementById("type").value;
    var amount = parseInt(document.getElementById("amount").value);

    /* VALIDATIONS */

    var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailPattern.test(mail)) {
        alert("Enter valid email");
        return;
    }

    if (phone.length != 10 || isNaN(phone)) {
        alert("Phone must be 10 digits");
        return;
    }

    if (linkedin.indexOf("linkedin.com") == -1) {
        alert("Enter valid LinkedIn URL");
        return;
    }

    if (amount <= 0 || isNaN(amount)) {
        alert("Enter valid amount");
        return;
    }
};
</script>

</body>
</html>