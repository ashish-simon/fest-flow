<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Potential Sponsors</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        body { font-family: Arial; background: #f2f2f2; }
        .container { width: 80%; margin: auto; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
        th {background-color: #2C3E50;
            color: white;}

        tr {
            border-bottom: 1px solid #ddd;
        }

        tr:hover {background-color: #D6EEEE;}

        a { text-decoration: none; padding: 5px 10px; }
        .btn { background: #4488aa; color: white; }
        .edit { color: black;        
            background-color: lightblue;
            border-radius: 4px;  
        }

        .delete { color: black;        
            background-color: lightpink;
            border-radius: 4px;   }
    </style>
</head>
<body>
    <!-- Heading -->
    <div class="heading">
        <h1 align = "center">Fest Flow</h1>
    </div>
	<div class="menu">
        <a href="dashboard.html">Home</a>
        <a href="themes.html">Upload Image</a>
        <a href="view_events.php">Suggest Theme</a>
        <a href="add_sponsors.php">Sponsors</a>
        <a href="event_order.html">Events</a>
    </div>

    <!-- Dashboard -->
    <br>

<div class="container">
    <h2>Potential Sponsors</h2>
    <a href="add_sponsors.php" class="btn">Add New Sponsor</a><br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Email</th>
            <th>Phone</th>
            <th>LinkedIn</th>
            <th>Type</th>
            <th>Amount</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM sponsors");

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['designation']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['linkedin']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td>
                <a href="edit_sponsor.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                <a href="del_sponsor.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirm('Delete this sponsor details?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>