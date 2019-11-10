<?php 
        
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb2";

$title =  $_POST["postFormTitle"];
$idKategorii =  $_POST["postFormCategories"];
$post = $_POST["postFormText"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO posty (tytul, idKategorii, tresc)
VALUES ('$title', '$idKategorii', '$post')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header('Location: index.php');
        
 ?>
