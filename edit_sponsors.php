<?php
include("db.php");

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM sponsors WHERE id=$id");
$row = mysqli_fetch_assoc($result);


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $linkedin = $_POST['linkedin'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];

    $query = "UPDATE sponsors SET 
              name='$name', 
              company='$company', 
              designation='$designation', 
              email='$email',
              phone='$phone',
              linkedin='$linkedin',
              type='$type',
              amount='$amount'
              WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        header("Location: view_sponsors.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Sponsors</title>
</head>
<body>

<h2>Edit Sponsors</h2>

        <form method="POST">

            <label>Sponsor Name:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

            <label>Company:</label>
            <input type="text" name="company" value="<?php echo $row['company']; ?>"><br><br>

            <label>Designation:</label>
            <input type="text" name="designation" value="<?php echo $row['designation']; ?>"><br><br>

            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

            <label>Phone:</label>
            <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

            <label>LinkedIn:</label>
            <input type="text" name="linkedin" value="<?php echo $row['linkedin']; ?>"><br><br>

            <label>Type:</label>
            <select name="type" required>
                <option <?php if($row['type']=="Gold") echo "selected"; ?>>Gold</option>
                <option <?php if($row['type']=="Silver") echo "selected"; ?>>Silver</option>
                <option <?php if($row['type']=="Platinum") echo "selected"; ?>>Platinum</option>
            </select>

            <label>Amount:</label>
            <input type="number" name="amount" value="<?php echo $row['amount']; ?>"><br><br>

            <input type="submit" name = "update" value="Edit">
        </form>

</body>
</html>