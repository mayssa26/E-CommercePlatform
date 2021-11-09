<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

require 'dbConn.php';
$conn = Connect();
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$query   = "SELECT * FROM amb_reg WHERE rUni = '".$q."'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['rName'] . "</td>";
        echo "<td>" . $row['rEmail'] . "</td>";
        echo "<td>" . $row['rPhone'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No record Found.";
}

$conn->close();
?>
</body>
</html>