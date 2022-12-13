<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <main>
<?php
    
    $lcheck=@$_GET["logincheck"];
    $pcheck=@$_GET["passcheck"];
    $l=@$_COOKIE["login"];
    $p=@$_COOKIE["haslo"];
    
    if($lcheck==$l&&$pcheck==$p){
        header("Location: https://fbork.zsti.me");
    }elseif($lcheck==$l&&$pcheck!=$p){
        ?>
            <p>Nieprawidłowe hasło! <a href="logowanie.html" class="powrot"><br><br>Powrót do logowania</a></p>
        <?php
    }else{
        ?>
        <p>Nieznaleźliśmy takiego konta! <a href="logowanie.html" class="powrot"><br><br>Powrót do logowania</a></p>
        <?php
    }
    
?> 
</main>
</body>
</html>