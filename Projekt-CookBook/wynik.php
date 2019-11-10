<!DOCTYPE html>
<html lang="pl">
<head>
     <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mainstyle.css">
<title>Cookbook</title>
</head>
<body>
<header>
  <img src="front2.jpg" alt="front" style="height:200px;width:90%;"/>
</header>

<section>
  <body>
      
      <section>
  <nav>   
     <a  href="index.php">Strona główna</a>
     
     <div class="dropdown">
  <button class="dropbtn">Przepisy</button>
  <div class="dropdown-content">
    <a href="zupy.php">Zupy</a>
    <a href="szybkiobiad.php">Szybki obiad</a>
    <a href="desery.php">Desery</a>
    <a href="vege.php">Vege</a>
  </div>
</div>
     
     <a href="wynik.php">Wyszukaj</a>
  </nav>
          <article>
    <h1>Znajdź przepis</h1>
    <form action="wynik.php" method="post">
      Wyszukaj według:
      <select name="metoda">
          <option value="nazwa_przepisu" >Przepis</option>
          <option value="skladniki" >Składnik</option>
      </select>
      <br /><br />
      Szukane wyrażenie:
      <input type="text" name="wyrazenie"></input>
      <button type="submit" name="wyszukaj">Wyszukaj</button>
    </form>
          
           <h1>Wyniki wyszukiwania:</h1>
           </article>
    <?php
      @ $metoda = $_POST['metoda'];
      @ $wyrazenie = $_POST['wyrazenie'];
      @ $wyrazenie = trim($wyrazenie);
      if (!$metoda || !$wyrazenie)
      {
        echo 'Wpisz nazwę przepisu lub składnika!';
        exit;
      }
      if (!get_magic_quotes_gpc())
      {
        $metoda = addslashes($metoda);
        $wyrazenie = addslashes($wyrazenie);
      }
    
require_once 'connection.php';
@ $id = $_GET["id"];

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

      $conn->query('SET NAMES utf8');
      $conn->query('SET CHARACTER_SET utf8_unicode_ci');
      
      $sql = "SELECT id, nazwa_przepisu, skladniki FROM przepis WHERE ".$metoda." like '%".$wyrazenie."%'";
      $result = $conn->query($sql);
      
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            {
            echo '<div class="search">'."<a href=post.php?id=" . $row["id"] ." >" .stripslashes($row['nazwa_przepisu']).'</b></hr>'."</a>"."</div>";
            }
        }   
        
     }
    else { echo "Brak wyników wyszukiwania";}
         
      $result->free();
      $conn->close();
    ?> 
  </body>
</html>