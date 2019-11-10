<?php

require_once 'connection.php';

$id = $_GET["id"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM przepis WHERE id=".$id;

if($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
}
else {
    echo "Error deleting record: " . $conn->error;
}

$sql = "DELETE FROM comment WHERE idPrzepisu=$id";
$conn->query($sql);

$conn->close();
header('Location: index.php');
?>