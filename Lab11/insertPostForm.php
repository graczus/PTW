<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cwiczenie 11</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h2>Dodaj post:</h2><hr>
        <br/>
        <form action="insertPost.php" method="post">
        <input type="text" name="postFormTitle" placeholder="Tytuł" required><br>
        <br/>
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
         
        echo "<select name='postFormCategories'>";
        if ($result->num_rows > 0) {
    
            while($row = $result->fetch_assoc()) {
        
              echo "<option value={$row["id"]}>{$row["nazwa"]}</option>";
         }
         } 
         else {
            
             echo "0 results";
           }
        echo "</select>";
        $conn->close();
        ?>
        <br><br/>
        <textarea rows="4" cols="50" name="postFormText" placeholder="Treść posta..." required></textarea>
         <br><br/>
         <button type="submit">Zapisz</button>
        </form>
        

   </body>
</html>