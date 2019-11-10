<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Homework 10</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Homework 10</h1>
           
        </header>
        <article>
            
            <a>To miał być najbardziej kontrowersyjny film polskiego kina. 
                Doborowa obsada – m.in. Daniel Olbrychski, Ewa Kasprzyk czy Zbigniew Zamachowski – powinna gwarantować jakość. Do tego zajawki, pokazujące najbardziej kontrowersyjne sceny polskiej polityki… 
                Kolejki po bilety były tak duże, że w moim lokalnym kinie, w którym jeśli na seansie pojawia się choć 10 osób, to jest to już duża frekwencja, bilety trzeba było kupować z wyprzedzeniem. 
                Słowem, sukces kasowy, a publiczność oczekiwała dzieła, które miało zdemaskować naszych polityków.</a>
            <br><br>
            <a>Niestety, coś poszło nie tak. Patryk Vega, wzorując się na Quentinie Tarantino, postanowił podzielić swoje dzieło na kilka epizodów. Każdy pokazuje „dobrą zmianę” z innego punktu widzenia,
                choć bohaterowie i niektóre sceny łączą te „odcinki”.</a>
          </article> 
       <section>
        <h2>Dodaj komentarz:</h2><hr>
        <br/>
        <form action="insert.php" method="post">
        <input type="text" name="author" placeholder="Autor" required><br>
        <br/>
        <textarea rows="4" cols="50" name="comment" placeholder="Komentarz..." required></textarea>
         <br><br/>
         <button type="submit">Dodaj</button>
        </form>
     </section> 
        
        <section>
        <h2>Komentarze:</h2><hr><br>   
        
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, nick, tresc, data FROM komentarze";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_object()) {
        echo "<div class='comment'>" . "<p class='datenick'>" . date("d.m.Y H:i", strtotime($row->data)) . "<b> "
                . " " . $row->nick. "</b><a class='delete' href='delete.php?id=".$row->id."'>"
                . "<img src='delete.png'></a>" . "</p>"
                . "<br><p class='commenttext'>" . $row->tresc. "</p>" . "<br></div><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
      </section>
        
    </body>
</html>