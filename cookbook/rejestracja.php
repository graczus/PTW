<?php
session_start();

if(isset($_POST['nick']))
{
    $wszystko_OK=true;
    $nick=$_POST['nick'];
    
    if((strlen($nick)<5 || (strlen($nick)>9)))
    {
        $wszystko_OK=false;
        $_SESSION['e_nick']="Nick musi posiadać od 3 do 9 znaków!";

    }
    
    if (ctype_alnum($nick)==false){
        $wszystko_OK=false;
        $_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr( bez polskich znaków";
        
    }
    $haslo1=$_POST['haslo1'];
    $haslo2=$_POST['haslo2'];
    
    if((strlen($haslo1)<4)||(strlen($haslo1)>10))
    {
        $wszystko_OK=false;
        $_SESSION['e_haslo']="Hasło musi posiadać od 5 do 10 znaków";
        
    }
    
    if($haslo1!=$haslo2)
    {
        $wszystko_OK=false;
        $_SESSION['e_haslo']="Podane hasła nie są identyczne";
    }
    
    if (!isset($_POST['regulamin']))
    {
        $wszystko_OK=false;
        $_SESSION['e_regulamin']="Potwierdź akceptację regulaminu";
    }
   
    
    if(wszystko_OK==true)
    {
        echo"Udana walidacja!";
        exit();
    }
    }
?>

<!DOCTYPE html>
<html lang="pl">

    <head>
        <meta charset="UTF-8">
        <title>Załóż darmowe konto</title>
    </head>
    <body>
        
        <form method="post">
            
            Nickname:<br> <input type="text" name="nick"/><br>
            
            <?php
            if(isset($_SESSION['e_nick']))
            {
                echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
                unset($_SESSION['e_nick']);
            }
            
            ?>
            <br>
            
            
            Twoje hasło<br> <input type="password" name="haslo1"/><br>
              <?php
            if(isset($_SESSION['e_haslo']))
            {
                echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                unset($_SESSION['e_haslo']);
            }
            
            ?>
            <br>
            Powtórz hasło <br> <input type="password" name="haslo2"/><br>
              <?php
            if(isset($_SESSION['e_haslo']))
            {
                echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                unset($_SESSION['e_haslo']);
            }
            
            ?>
            <br>
            
            <label>
                
            <input type="checkbox" name="regulamin"/> Akceptuję regulamin
            </label>
              <?php
            if(isset($_SESSION['e_regulamin']))
            {
                echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
                unset($_SESSION['e_regulamin']);
            }
            
            ?>
            
            <input type="submit" value="Zarejestruj się"/>
            
        </form>
        
        <?php
        if(isset($_SESSION['blad']))
            echo $_SESSION['blad'];
        ?>
    </body>
</html>