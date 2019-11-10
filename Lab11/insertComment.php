<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb2";
$author =  $_POST["commentFormAuthor"];
$postId = $_POST["commentFormPostId"];
$comment = $_POST["commentFormText"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO posty (nick, idPosta, tresc)
VALUES ('$author', '$postId', '$comment')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header('Location: post.php');
        
 ?>