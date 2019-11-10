<html>
    <head>
        <meta charset="UTF-8">
        <title>Strona Głowna</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>Homework 09</header>
        <h2>Polityka-krótka recenzja</h2>
        
        <article>
            <p>To miał być najbardziej kontrowersyjny film polskiego kina. 
                Doborowa obsada – m.in. Daniel Olbrychski, Ewa Kasprzyk czy Zbigniew Zamachowski – powinna gwarantować jakość. Do tego zajawki, pokazujące najbardziej kontrowersyjne sceny polskiej polityki… 
                Kolejki po bilety były tak duże, że w moim lokalnym kinie, w którym jeśli na seansie pojawia się choć 10 osób, to jest to już duża frekwencja, bilety trzeba było kupować z wyprzedzeniem. 
                Słowem, sukces kasowy, a publiczność oczekiwała dzieła, które miało zdemaskować naszych polityków.</p>
            
            <a>Niestety, coś poszło nie tak. Patryk Vega, wzorując się na Quentinie Tarantino, postanowił podzielić swoje dzieło na kilka epizodów. Każdy pokazuje „dobrą zmianę” z innego punktu widzenia,
                choć bohaterowie i niektóre sceny łączą te „odcinki”.</a>
          </article>
        
        <div class="container">
            <form action="dodajKomentarz.php" method="post">
             Nick <input type="text" name="firstname" required><br>
            <textarea name="comment" rows="10" cols="30" required>Napisz Komentarz..</textarea>
            <input type="submit" value="Dodaj">
            </form>
        </div>
              <?php
            $myfile = fopen("komentarze.txt", "r") or die("Unable to open file!");
            while(!feof($myfile)) 
            {
            echo'<div class="container">';
            echo '<b>Użytkownik:<b>';
            echo fgets($myfile);
            echo '<b>Napisał:</b>';
            echo fgets($myfile);
            echo  fgets($myfile);
            echo '</div>';
            }
            fclose($myfile);
            ?>
    
    </body>
</html>
  

