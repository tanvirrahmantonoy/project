<?php
include 'db.php';

$sql = "SELECT id, name, email, phone, registration_date FROM members";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Members List - Science Club</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="members_list.php">Members List</a></li>
        </ul>
    </nav>
    <h1>Members List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Registration Date</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["name"]. "</td>
                        <td>" . $row["email"]. "</td>
                        <td>" . $row["phone"]. "</td>
                        <td>" . $row["registration_date"]. "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No members found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
