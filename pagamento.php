<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pagamento.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <div class="container">
        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Informações Pessoais do cliente</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nome Completo</label>
                            <input type="text" placeholder="Informe o nome completo" required>
                        </div>

                        <div class="input-field">
                            <label>Data de Nascimento</label>
                            <input type="date" placeholder="Insira a data de nascimento" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Informe seu e-mail" required>
                        </div>

                        <div class="input-field">
                            <label>Número de telefone</label>
                            <input type="tel" placeholder="Informe seu telefone" required>
                        </div>

                        <div class="input-field">
                            <label>Sexo</label>
                            <select required>
                                <option disabled selected>Selecione o seu sexo</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nº do CPF</label>
                            <input type="text" placeholder="Informe o seu CPF" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Informações sobre forma de pagamento</span>

                    <div class="fields">
                        <div class="input-field">
                            <label> Vaga</label>
                            <input type="text" placeholder="Insira o código da vaga" required>
                        </div>

                        <div class="input-field">
                            <label>Data de Entrada</label>
                            <input type="date" placeholder="Insira a data de entrada" required>
                        </div>

                        <div class="input-field">
                            <label>Data de Saída</label>
                            <input type="date" placeholder="Insira a data de saída" required>
                        </div>

                        <div class="input-field">
                            <label>Periodo Estimado</label>
                            <input type="time" placeholder="Insira um periodo" required>
                        </div>

                        <div class="input-field">
                            <label>Periodo Total</label>
                            <input type="time" placeholder="Informe o periodo total" required>
                        </div>

                        <div class="input-field">
                            <label>Valor Estimado</label>
                            <input type="text" placeholder="Insira o valor estimado" required>
                        </div>
                        </div>
                        <button class="nextBtn">
                            <span class="btnText">Proximo</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
    <script src="script.js"></script>
</body>
</html>