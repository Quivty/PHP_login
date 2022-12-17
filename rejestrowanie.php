<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    setcookie("haslo",@$_GET["pass"],time()+3600*24*7);
    setcookie("login",@$_GET["login"],time()+3600*24*7);
    $l=@$_COOKIE["login"];
    $p=@$_COOKIE["haslo"];
    if($l!=""&&$p!=""){
        header("Location: logowanie.html");
    }else{
        header("Location: rejestracja.html");
    }
?>
</body>
</html>


