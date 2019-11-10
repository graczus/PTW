<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb2";
$id = $_GET["id"];
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT idKategorii FROM Posty WHERE id = $id");
$row = $result->fetch_assoc();
$idKategorii = $row["idKategorii"];
$result = $conn->query("SELECT * FROM Kategorie WHERE id = $idKategorii");      
$row = $result->fetch_assoc();
echo "<h1>". $row["nazwa"] ."</h1>";        
$result = $conn->query("SELECT * FROM Posty WHERE id = $id");
$row = $result->fetch_assoc();
        echo "<p>". $row["tytul"] ."</p>";
        echo "<p>". $row["tresc"] ."</p>";
        echo "<p>". $row["data"] ."</p>";
?>
<h2>Dodaj komentarz:</h2><hr>
<br/>
<form action="insertComment.php" method="post">
<input type="text" name="commentFormAuthor" placeholder="Autor" required><br>
<br/>
<textarea rows="4" cols="50" name="commentFormText" placeholder="Komentarz..." required></textarea>
<br><br/>

<button type="submit">Dodaj</button>
</form>
      
<?php
$result = $conn->query("SELECT * FROM Komentarze WHERE idPosta = $id");
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<p>". $row["nick"] ."</p>";  
        echo "<p>". $row["tresc"] ."</p>"; 
        echo "<p>". $row["data"] ."</p>"; 
    }
} else {
    echo "0 results";
} 
$conn->close();
?>
<a href="index.php">Powrót</a>