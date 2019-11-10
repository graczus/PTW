<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
            table{
                border: <?php echo $_POST["ramka"]; ?>;
                border-color: <?php echo $_POST["colors"]; ?>;
            }
            td {
                width: <?php echo $_POST ["szerokosc"];?>px;
                height: <?php echo $_POST["wysokosc"]; ?>px;
            }
        </style>
        
    </head>
    <body>
        
        <?php
        echo"<table>";
        for($i=0; $i<$_POST["rows"] ; $i++)
        {
            echo"<tr>";
            for($j=0; $j<$_POST["cells"]; $j++)
            {
                echo "<td>" . $_POST["tekst"]  . "</td>";
              
            }
            echo"</tr>";
        }
       
        
        ?>
        <p><a href="index2.php">Powrót</a></p>
    </body>
</html>