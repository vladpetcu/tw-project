<?php
    session_start();
    if(isset($_SESSION['iduser'])){
        session_unset();
        session_destroy();
    }   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TripInspire</title>
        <link rel="stylesheet" type="text/css" href="../../css/404-style.css">
    </head>
<body>
    <main>
        <div id="div404">
            <div id="gif-container">
                <img src="../../images/pinguin.gif" alt="">
            </div>
            <p>404 Errror</p>
            <h3>The page you are looking for can not be displayed!</h3>
        </div>
    </main>
</body>
</html>