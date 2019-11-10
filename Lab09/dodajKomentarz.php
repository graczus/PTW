<?php
$myfile = fopen("komentarze.txt", "a") or die("Unable to open file!");
$txt ="<p>". date("Y-m-d h:i:sa")."<p>";
fwrite($myfile, $txt);
$txt ="<p>".$_POST["firstname"]."</p>"."\n" ;
fwrite($myfile, $txt);
$txt ="<p>" .$_POST["comment"]. "</p>"."\n" ;
fwrite($myfile, $txt);
fclose($myfile);
header('Location: index.php');
?>
