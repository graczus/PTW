<!DOCTYPE html>
<html>
<head>
    <title>Cookbook</title>
     <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mainstyle.css">
</head>
<body>
<header>
  <img src="front2.jpg" alt="front" style="height:200px;width:90%;"/>
</header>

<section>
  <body>
      
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
     <a href="wynik.php">Wyszukaj</a>
  </nav>
          
          <article>
              <br><br>
    <h1>Znajdź przepis</h1>
    <form action="wynik.php" method="post">
      Wyszukaj według:
      <select name="metoda">
       <option value="nazwa_przepisu" />Przepis
       <option value="skladniki" />Składnik
      </select>
      <br /><br />
      Szukane wyrażenie:
      <input type="text" name="wyrazenie" />
      <button type="submit" name="wyszukaj">Wyszukaj</button>
     
    </form>
          </article>
  </body>
</html>