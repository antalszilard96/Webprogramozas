<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ruhak";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ruhak";
$result = $conn->query($sql);

echo "<a href='bevitel.php'>Új ruha</a>"
;
if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border=1>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row["id"]."</td>";
        echo "<td>". $row["nev"]."</td>";
        echo "<td>". $row["ar"]."</td>";
        echo "<td>". $row["tipus"]."</td>";
        $src ="image/" . $row["kep"];
        echo "<td>" . "<img src= '$src' height='60px'>" . "</td>";
        echo "<td><a href=\"update.php?id=" . $row["id"] . "\">Update</a></td>";
        echo "<td><a href=\"delete.php?id=" . $row["id"] . "\">Delete</a></td>";

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>


