<?php

require_once 'connection.php';

$id = $_GET["id"];

$newtitle = $_POST["editTitle"];
$newtext = $_POST["editText"];
$newtext2 = $_POST["editText2"];

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE przepis SET nazwa_przepisu='" . $newtitle . "', przygotowanie='" 
        . $newtext . "',skladniki='" . $newtext2 . "' WHERE id=$id";

if ($conn->query($sql)) {
    echo "New record created successfully";
} 
else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: post.php?id='.$id);

?>