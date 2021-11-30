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

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nev = $_POST['nev'];
    $ar = $_POST['ar'];
    $tipus = $_POST['tipus'];
    $img = $_POST['img'];
    $sql = "UPDATE ruhak SET nev='$nev', ar='$ar', tipus='$tipus', kep='$img' where id= '$id'";

    $result = $conn->query($sql);

    if ($result === true) {
        header("Location: listazas.php");
    } else {
        echo "Hiba!";
    }
    } else {
        $id = $_GET['id'];
        $sql = "SELECT * FROM ruhak WHERE id=" .$id;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $conn->close();
    }
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    Nev:<input type="Text" name="nev" value="<?php echo $row["nev"]; ?>"><br>
    Ar:<input type="Text" name="ar" value="<?php echo $row["ar"]; ?>"><br>
    Tipus:<input type="Text" name="tipus" value="<?php echo $row["tipus"]; ?>"><br>
    Kep:<input type="File" name="img" id="img" value="<?php echo $row["kep"];?>"><br>
    <input type="hidden" name="id" value="<?php echo $row["id"];?>">
    <input type="Submit" name="submit" value="Elkuld">
</form>

