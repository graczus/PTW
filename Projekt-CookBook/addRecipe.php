<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mainstyle.css">
<link rel="stylesheet" href="addform.css">
<title>Cookbook</title>
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
    
    <form action="addRecipeProcess.php" method="post" enctype="multipart/form-data">
        <br>
        <input type="text" name="postFormTitle" placeholder="Nazwa potrawy" required><br>
        
        <?php
         require_once 'connection.php';
         
          $conn = new mysqli($servername, $username, $password, $dbname);
          $conn->set_charset("utf8");

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

         $sql = "SELECT kategorie FROM category";
         $result = $conn->query($sql);
         
        echo "<select name='postFormCategories'>";
        if ($result->num_rows > 0) {
    
            while($row = $result->fetch_assoc()) {
        
              echo "<option value={$row["kategorie"]}>{$row["kategorie"]}</option>";
         }
         } 
         else {
            
             echo "0 results";
           }
        echo "</select>";
        $conn->close();
        ?>
        
        <br>
        
<textarea rows="4" cols="50" name="postFormPrep" placeholder="Przygotowanie" required></textarea><br>
     <textarea rows="4" cols="50" name="postFormText" placeholder="Składniki" required></textarea><br>
     
       Dodaj zdjęcie: 
       <input type="file" name="fileToUpload" id="fileToUpload"  required>
            <br><br>
         <button type="submit" value="Upload Image" name="submit">Dodaj przepis</button>
    </form>
     </body>
    </html>
    