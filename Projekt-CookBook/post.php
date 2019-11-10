<!DOCTYPE html>
<html>
<head>
    <title>Cookbook</title>
     <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="subpagestyle2.css">
<link rel="stylesheet" href="mainstyle.css">
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
    
    while($row = $result->fetch_assoc()) {

        echo "<h2>". $row['nazwa_przepisu'] ."</h2>";
        echo"<div class='prep'>"."<h3>Przygotowanie</h3>". $row['przygotowanie'] ."</div>";
        echo "<div class='ingridients'>"."<h3>Składniki</h3>". $row['skladniki'] ."</div>";
        if(!empty($row['photo'])){
        echo "<img src='obrazy/".$row['photo']."' width='400'/>";
        echo "<hr>";
        echo "<a href='delete.php?id=".$row["id"]."'>Usuń przepis <img src='delete.png' style='height:50px'/></a>";
        echo "<a href='edit.php?id=".$row["id"]."'>Edytuj</a>";
       echo "<hr>";
        }
    }

 }       
        ?>         

</section>
    
    <footer>

<h2>Dodaj komentarz:</h2>
<br/>
<form action="insertComment.php?id=<?php echo $id ?>" method="post">
<input type="text" name="commentFormAuthor" placeholder="Autor" required><br>
<br/>
<textarea rows="4" cols="50" name="commentFormText" placeholder="Komentarz..." required></textarea>
<br><br/>

<button type="submit">Dodaj</button>
</form>
      
<?php

$sql= "SELECT * FROM comment WHERE idPrzepisu = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<p>". $row["nick"] ."</p>";  
        echo "<p>". $row["tresc"] ."</p>"; 
        echo "<p>". $row["data"] ."</p>"; 
    }
} else {
    echo "Brak komentarzy";
} 
$conn->close();
?>

</footer>
</body>
</html>