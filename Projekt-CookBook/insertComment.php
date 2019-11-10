<?php

require_once 'connection.php';

$author =  $_POST["commentFormAuthor"];
$postId = $_GET["id"];
$com = $_POST["commentFormText"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO comment (nick, idPrzepisu, tresc)
VALUES ('$author', '$postId', '$com')";

if ($conn->query($sql)) {
    echo "New record created successfully";
} 
else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: post.php?id='.$_GET["id"]);
        
 ?>
