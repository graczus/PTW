<?php
$myfile = fopen("komentarze.txt", "a") or die("Unable to open file!");
$txt ="\n" . date("Y-m-d h:i:sa") . "\n";
fwrite($myfile, $txt);
$txt = $_POST["firstname"] . "\n";
fwrite($myfile, $txt);
$txt =  $_POST["message"];
fwrite($myfile, $txt);
fclose($myfile);
header('Location: index.php');
?>
    