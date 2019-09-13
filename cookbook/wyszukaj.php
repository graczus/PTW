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
  <h1>CookBook</h1>
</header>

<section>
  <body>
      
      <section>
  <nav>   
     <a style="background-color:#577284" href="index.php">Strona główna</a>
     
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
       <option value="przepis" />Przepis
       <option value="produkt" />Produkt
      </select>
      <br /><br />
      Szukane wyrażenie:
      <input type="text" name="wyrazenie" />
      <input type="submit" name="wyszukaj" />
    </form>
          </article>
  </body>
</html>