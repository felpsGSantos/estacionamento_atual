<?php

include('conectar_db.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>24/7 Parking</title>
    <link rel="stylesheet" href="images/logo.png">
</head>

<body>


    <div class="container">

        <?php
        /*
    
    
        FORM
    
    
    
        */ ?>
        <form action="cadastrar_action.php" method="POST">

            <div class="form first">
                <div class="details personal">
                    <span class="title">Informações Pessoais do Cliente</span>


                    <div class="fields">
                        <div class="input-field">
                            <label>Nome Completo</label>
                            <input type="text" placeholder="Insira o nome completo" name="nome" required>
                        </div>

                        <div class="input-field">
                            <label>Data de Nascimento</label>
                            <input type="date" placeholder="Insira a data de aniversario" name="nasc" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Coloque seu email" name="email" required>
                        </div>

                        <div class="input-field">
                            <label>Número do Celular></label>
                            <input type="tel" placeholder="Digite o nº do celular" name="num" required>
                        </div>

                        <div class="input-field">
                            <label>Sexo</label>
                            <select required name="sexo">
                                <option disabled selected>Seleciona seu sexo</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Nº do CPF</label>
                            <input type="text" placeholder="Digite o cpf" required name="cpf">
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Informações do Veiculo</span>

                    <div class="fields">

                        <div class="input-field">
                            <label>Categoria</label>
                            <select required name="cat">
                                <option disabled selected>Seleciona sua categoria</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>

                            </select>
                        </div>

                        <div class="input-field">
                            <label>Marca do veiculo </label>
                            <input type="text" placeholder="Digite a Marca do veiculo" required name="marca">
                        </div>

                        <div class="input-field">
                            <label>Nº da Placa</label>
                            <input type="text" placeholder="Nº da Placa" required name="nump">
                        </div>

                        <div class="input-field">
                            <label>Modelo</label>
                            <input type="text" placeholder="Insira o modelo do veiculo" required name="mod">
                        </div>

                        <div class="input-field">
                            <label>Cor</label>
                            <input type="text" placeholder="Cor do Veiculo" required name="cor">
                        </div>


                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Cadastrar</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <img class="Carro" src="images/Captura de tela 2023-05-23 082135 - Copia.png" alt="">
    <script src="script.js"></script>
</body>

</html>