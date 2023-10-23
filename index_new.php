<?php

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo a nosso sistema!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body> 
<script src="scripts/functions.js"></script>
    <div class="row">
        <div class="col">
            <div class="row nav">
                <div class="col-2">
                    <img src="assets/images/logo.png" class="logo" width="48px" height="48px">
                </div>
                <div class="col-4">
                    <input type="text" class="input-icon" id="searchInput" placeholder="Buscar" />
                </div>
                <div class="col-6">
                    <a class="icon" href="#home">
                        <img src="assets/images/carrinho.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>';

?>