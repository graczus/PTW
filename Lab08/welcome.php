 <html>
      <link rel="stylesheet" href="style.css">
     <style>
       
         p {
            color: <?php echo $_POST["colors"]; ?>;
         }
       
     </style>
<body>
     <header>
            <h1>Homework 08</h1>
        </header>
        <nav>   
     <a href="index.php">Strona główna</a>
     <a href="index2.php">Część II</a>
     <a href="subpage.php">Tabela</a>
</nav>

<p>Witaj <?php echo $_POST["firstname"]; ?> 
    <?php echo $_POST["lastname"]; ?> <br>
</p>
    <a href="index.php">Powrót</a>


</body>
</html>