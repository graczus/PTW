<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Homework 11</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
         <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb2";
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, nazwa FROM kategorie";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
    {
    
        while($row = $result->fetch_assoc()) 
            {
        
                echo "<a href='index.php?={$row["id"]}'> {$row["nazwa"]}</a>";
               
            }
        echo "<a href='index.php'>Wszystkie</a>";
   
    } 
    else 
    {
    echo "0 results";
    }


    $sql = "SELECT p.id, p.tytul, k.nazwa, p.data FROM posty p, kategorie k WHERE p.idKategorii = k.id";
if (isset($_GET["id"])) {
    
    $sql .=" AND p.idKategorii = {$_GET["id"]}";
    
    }
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    echo "<table>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td><td>" . "<a href=post.php?id=" . $row["id"] . ">" 
                .$row["tytul"] . "</a>" ."</td><td>". $row["nazwa"] ."</td><td>". $row["data"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 
        <a href='insertPostForm.php'>Dodaj</a>
    </body>
</html>