<?php 

session_start();

if ($_SESSION['cad']){

    echo $_SESSION['cadastrado'];

    $_SESSION['cad']=false;

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">24/7 Parking</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-parking-circle"></i>
                    <span class="link-name">Vagas</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Atendimento</span>
                </a></li>
                <li><a href="cadastrar.php">
                    <i class="uil uil-user-circle"></i>
                    <span class="link-name">Cadastro Cliente</span>
                </a></li>
                <li><a href="pagamento.php">
                <i class="fa-regular fa-credit-card"></i>
                    <span class="link-name">Pagamento</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-info-circle"></i>
                    <span class="link-name">Suporte</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="index.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Sair</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Modo Escuro</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Pesquisar...">
            </div>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Painel de Controle</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-car"></i>
                        <span class="text">Vagas Disponiveis</span>
                        <span class="number">bd</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-car"></i>
                        <span class="text">Vagas Ocupadas</span>
                        <span class="number">bd</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-user-circle"></i>
                        <span class="text">Clientes</span>
                        <span class="number">bd</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Atividades Recentes</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Nomes</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Marca do Veículo</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Placa do Veículo</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Hora de Entrada</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Hora de Saída</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                        <span class="data-list">bd</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="dash.js"></script>
</body>
</html>