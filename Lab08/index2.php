<html>
 <head>
 <meta charset="UTF-8">
 <title>Część II</title>
 <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <header>
            <h1>Homework 08</h1>
        </header>
        <nav>   
     <a style="background-color:#ff6f61" href="index.php">Strona główna</a>
     <a href="index2.php">Część II</a>
     <a href="subpage.php">Tabela</a>
</nav>
        <article>
        <form action="subpage.php" method="post">
             Liczba wierszy i kolumn:
            <input type="number" name="rows" placeholder="Ilosc wierszy">
            <input type="number" name="cells" placeholder="Ilosc kolumn"><br>
            Szerokość i wysokość komórki:
            <input type="number" name="szerokosc" placeholder="Szerokosc komorki">
        <input type="number" name="wysokosc" placeholder="Wysokosc komorki"><br>
            Tekst który ma się pojawiać: <input  type="text" name="tekst"><br>
            Czy ma się pojawić ramka?:
            <input type="radio" name="ramka" value="solid">Tak<br>
            <input type="radio" name="ramka" value="none">Nie<br>
            Wybierz kolor ramki: <select name="colors">
            <option value="red">Czerwony</option>
            <option value="blue">Niebieski</option>
            <option value="green">Zielony</option>
            </select><br><br>
              <input type="submit" value="Zatwierdź!">
             
        </form>
        </article>
            
    </body>
</html>