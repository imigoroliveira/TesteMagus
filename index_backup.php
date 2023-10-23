<?php

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo a nosso sistema!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body> 
<script src="scripts/functions.js"></script>

    <div class="nav-bar-icons">
        <a class="icon" href="#home">
            <div class="icon">
                <img src="assets/images/logo_magus.png" width="34px" height="34px">
                <div class="circle-a"></div>
                <div class="circle-b"></div>
            </div>
        </a>
        <input type="text" class="input-icon" id="searchInput" placeholder="Buscar" />
        <a class="icon" href="#home">
                <img src="assets/images/carrinho.png">
        </a>
        <a class="icon" href="#home">
            <img src="assets/images/profile-circle.png">
        </a>
    </div>

</body>
</html>';

?>