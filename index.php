<?php

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo a nosso sistema!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
    <body> 
        <script src="scripts/functions.js"></script>
        <div class="row">
            <div class="col">
                <div class="row navbar">
                    <div class="col-2 item">
                        <img src="assets/images/logo.png" class="logo" width="48px" height="48px">
                    </div>
                    <div class="col-6 item">
                        <input type="text" class="input-icon" id="searchInput" placeholder="Buscar" />
                    </div>
                    <div class="col-2 item">
                        <img src="assets/images/carrinho.png" width="38px" height="38px">
                    </div>
                    <div class="col-2 item">
                        <img src="assets/images/profile-circle.png" width="38px" height="38px" >
                    </div>
                </div>
                
                <div class="full-width-line"></div>    
                
                <div class="row">
                    <div class="col cards">
                        <div class="row">
                            <div class="col">
                            Teste
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div id="cardDisplay">
                            </div>
                        </div>
                        
                        <div class="full-line"></div>    

                        <div class="row">
                            <div class="col">
                                Teste
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        
    </body>
</html>';

?>