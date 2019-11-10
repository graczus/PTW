<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Homework 08</h1>
        </header>
        <nav>   
     <a href="index.php">Strona główna</a>
     <a href="index2.php">Część II</a>
      <a href="subpage.php">Tabela</a>
</nav>
        <article>
             <form action="welcome.php" method="post">
            Imię: <input type="text" name="firstname"><br>
            Nazwisko: <input  type="text" name="lastname"><br>
            Wybierz kolor:   <select name="colors">
            <option value="red">Czerwony</option>
            <option value="blue">Niebieski</option>
            <option value="green">Zielony</option>
            </select><br><br>
            <input type="submit" value="Zatwierdź!">
        </form>
        </article>
    </body>
</html>