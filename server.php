<!DOCTYPE html> 
<html lang="en"> 
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

$name = $_GET["uname"];
$email = $_GET["uemail"];

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO login (Name, email)
VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
