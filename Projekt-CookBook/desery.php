<!DOCTYPE html>

<head>
    <title>Cookbook</title>
     <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="subpagestyle.css">
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
      <article>
        <h1>DESERY</h1>
        <img src="desery2.jpg" />
            
    </article>
    
    <?php 

    require_once 'connection.php';

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, nazwa_przepisu,photo FROM przepis WHERE kategoria= 'desery'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        
        echo "<div class='recipes'>";
         if(!empty($row['photo'])){
         echo "<img src='obrazy/".$row['photo']."' width='400'/>";}
        echo  "<div class='desc'>". "<a href=post.php?id=" . $row["id"] . ">" . $row["nazwa_przepisu"] . "</a>" ;
        echo "</div>";
        echo "</div>"."</br>";
    }
}   
?>
    
</section>
    </body>
</html>