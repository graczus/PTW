<!DOCTYPE html>
<html>
<head>
    <title>Cookbook</title>
     <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="subpagestyle2.css">
<link rel="stylesheet" href="mainstyle.css">
<link rel="stylesheet" href="addform.css">
</head>
<body>
<header>
  <img src="front2.jpg" alt="front" style="height:200px;width:90%;"/>
</header>

<section>
  <nav>   
     <a href="index.php">Strona główna</a>
     
     <div class="dropdown">
  <button class="dropbtn">Przepisy</button>
  <div class="dropdown-content">
    <a href="zupy.php">Zupy</a>
    <a href="szybkiobiad.php">Szybki obiad</a>
    <a href="desery.php">Desery</a>
    <a href="vege.php">Vege</a>
  </div>
</div>
      <a href="addRecipe.php">Dodaj przepis</a>
      <a href="wynik.php">Wyszukaj</a>
  </nav>
    <br><br>
               

<?php
require_once 'connection.php';

@ $id = $_GET["id"];

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

        
$sql = "SELECT  * FROM przepis WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()){

        echo "<form action='editRecipe.php?id=".$id."' method='post'>";
        echo "<h2>Nazwa przepisu:</h2><br><textarea name='editTitle'>" . $row['nazwa_przepisu'] . "</textarea><br>";
        echo "<h3>Przygotowanie:</h3><br><textarea name='editText'>" . $row['przygotowanie'] . "</textarea>";
        echo "<h3>Składniki:</h3><br><textarea name='editText2'>" . $row['skladniki'] . "</textarea>"."<br>";
        echo "<button type='submit'>Zapisz zmiany</button>";
        }

    }

$conn->close();
          
        ?>         
         

   </body>
</html>
