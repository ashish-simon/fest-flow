<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Potential Sponsors</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container { width: 80%; margin: auto; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
        th { background: #007bff; color: white; }
        a { text-decoration: none; padding: 5px 10px; }
        .btn { background: green; color: white; }
        .edit { background: orange; color: white; }
        .delete { background: red; color: white; }
    </style>
</head>
<body>

<div class="container">
    <h2>Potential Sponsors</h2>
    <a href="add_sponsors.php" class="btn">Add New Sponsor</a><br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>email</th>
            <th>Phone</th>
            <th>LinkedIn</th>
            <th>type</th>
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