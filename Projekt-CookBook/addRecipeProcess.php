<?php 
        
require_once 'connection.php';

$target_dir = "obrazy/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

$zdj =  basename($_FILES["fileToUpload"]["name"]); 

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Plik już istnieje";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Za duży rozmiar pliku";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Dopuszczalne tylko : JPG, JPEG, PNG & GIF";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Plik nie został dodany.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Plik ". basename( $_FILES["fileToUpload"]["name"]). " został dodany.";
    } else {
        echo "Wystąpił problem przy dodawaniu pliku";
    }
}

$kategoria =  $_POST["postFormCategories"];
$nazwa_przepisu =  $_POST["postFormTitle"];
$przygotowanie = $_POST["postFormPrep"];
$skladniki= $_POST["postFormText"];

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO przepis (kategoria, nazwa_przepisu, przygotowanie, skladniki, photo)
VALUES ('$kategoria', '$nazwa_przepisu', '$przygotowanie','$skladniki', '$zdj')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: index.php');
        
 ?>
