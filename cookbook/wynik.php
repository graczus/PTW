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
  <h1>CockBook</h1>
</header>

<section>
  <body>
      
      <section>
  <nav>   
     <a  href="index.php">Strona główna</a>
     
     <div class="dropdown">
  <button class="dropbtn">Przepisy</button>
  <div class="dropdown-content">
    <a href="zupy.html">Zupy</a>
    <a href="szybkiobiad.html">Szybki obiad</a>
    <a href="desery.html">Desery</a>
    <a href="vege.html">Vege</a>
  </div>
</div>
     
     <a href="wynik.php" style="float:right">Wyszukaj</a>
  </nav>
          <article>
    <h1>Znajdź przepis</h1>
    <form action="wynik.php" method="post">
      Wyszukaj według:
      <select name="metoda">
          <option value="przepis" >Przepis</option>
          <option value="produkt" >Produkt<option>
      </select>
      <br /><br />
      Szukane wyrażenie:
      <input type="text" name="wyrazenie" />
      <input type="submit" name="wyszukaj" />
    </form>
          
           <h1>Wyniki wyszukiwania</h1>
           </article>
    <?php
      @ $metoda = $_POST['metoda'];
      @ $wyrazenie = $_POST['wyrazenie'];
      @ $wyrazenie = trim($wyrazenie);
      if (!$metoda || !$wyrazenie)
      {
        echo 'Wpisz nazwę przepisu lub produktu!';
        exit;
      }
      if (!get_magic_quotes_gpc())
      {
        $metoda = addslashes($metoda);
        $wyrazenie = addslashes($wyrazenie);
      }
     // require_once "connect.php" ;
      
       @ $db = new mysqli('localhost','root','','cookbook');
      
      if (mysqli_connect_errno())
      {
        echo 'Połączenie z bazą nie powiodło się. Spóbuj ponownie';
        exit;
      }
      $db->query('SET NAMES utf8');
      $db->query('SET CHARACTER_SET utf8_unicode_ci');
      $zapytanie = "select * from recipes where ".$metoda. " like '%".$wyrazenie."%'";
      $wynik = $db->query($zapytanie);
      $ile_znaleziono = $wynik->num_rows;
      echo '<p> Liczba znalezionych przepisów: '.$ile_znaleziono.'</p>';
      for ($i=0;$i<$ile_znaleziono;$i++)
      {
        $wiersz = $wynik->fetch_assoc();
        echo '<p><b>'.($i+1).'. przepis: '.stripslashes($wiersz['przepis']).'</b><br />';
        echo 'produkt: '.stripslashes($wiersz['produkt']).'<br />';
       
      }
      
      $wynik->free();
      $db->close();
    ?> 
  </body>
</html>