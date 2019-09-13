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
  <h1>CookBook</h1>
</header>

<section>
  <nav>   
     <a href="index.php">Strona główna</a>
     
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
        <br><br>
        <p>Witaj w internetowej książce kucharkiej. Znajdziesz tu proste przepisy na szybkie dania! </p>
        <br>
        <a>CIEKAWOSTKA!<br>Wąchanie świeżej lub suszonej mięty, suszonych jabłek lub świeżych wiśni
            znacznie zmniejsza apetyt, dając uczucie pełnego żołądka.</a><br><br>
    </article>
    
    </section>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="zupy.jpg" alt="zupy" style="width:100%" onclick="myFunction(this);">
    
    
  </div>
  <div class="column">
    <img src="szybki_obiad.jpg" alt="szybki obiad" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="desery2.jpg" alt="desery" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="vege.jpg" alt="vege" style="width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:70%">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>


</body>
</html>
