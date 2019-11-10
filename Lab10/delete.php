<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";
$id = $_GET['id'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }
$sql = "DELETE FROM Komentarze WHERE id=".$id;
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
header('Location: index.php');
?> 