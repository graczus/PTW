<!DOCTYPE html>
<html>
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
         <h1>SZYBKI OBIAD</h1>
        <img src="szybki_obiad.jpg" />
        <p>Pomysły na szybki obiad po pracy. Dania obiadowe do zrobienia w 30 minut. Proste do wykonania przepisy, 
            króre sprawdzą się w trakcie tygodnia pracy, od poniedziałku do piątku. Dania typu stir - fry czyli "mieszaj i smaż", dania przygotowywane na jednej patelni lub w jednym garnku. Curry, frittaty, makarony, proste zupy, od smażonych filetów kurczaka po proste i pyszne pomysły na rybę. I jeszcze wiele innych ciekawych i zaskakujących połączeń smaków!</p>
    </article>
    
    <?php 
require_once 'connection.php';

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, nazwa_przepisu,photo FROM przepis WHERE kategoria= 'szybki obiad'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
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