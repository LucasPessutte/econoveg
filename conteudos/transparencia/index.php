<?php
session_start();
include_once('../../conn/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>AnalisaItapê | Transparência</title>

    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT">

    <!-- Favicons-->
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../../img/apple-touch-icon-144x144-precomposed.png">

    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/vendors.css" rel="stylesheet">
    <link href="../../css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="../../css/skins/square/grey.css" rel="stylesheet">
    <link href="../../css/skins/square/blue.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../../css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="page" class="theia-exception">
        <header class="header menu_2">
            <?php include('../../components/header.php') ?>
        </header>
        <!-- /header -->

        <main>
            <section id="hero_in" class="transparencia">
                <div class="wrapper">
                    <div class="container">
                        <h1 class="fadeInUp"><span></span>Transparência</h1>
                    </div>
                </div>
            </section>
            <!--/hero_in-->

            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="grid-alt-row">
                            <div class="grid-alt-col">
                                <div class="box_list">
                                    <div class="p-4">
                                        <h3>Portal de Transparência</h3>
                                        <p class="mb-2">A seção de Transparência visa oferecer dados brutos de despesas e receitas do munícipio de Itapetininga. Acompanhe a visão geral da movimentação de contabilidade, confira as categorias abaixo:</p>
                                        <label>• Despesas Orçamentárias</label>
                                        <br>
                                        <label>• Receitas Orçamentárias</label>
                                        <br>
                                        <label>• Gráfico Geral</label>
                                    </div>
                                    <hr class="m-0">
                                    <div class="p-4">
                                        <h3>Receitas Orçamentárias 2022</h3>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xl-3 col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Acumulado Crédito</label>
                                                    <label class="text-info fw-600">R$ 38.216.756,42</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Acumulado Débito</label>
                                                    <label class="text-danger fw-600">R$ -3.861.130,76</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Acumulado Período</label>
                                                    <label class="text-info fw-600">R$ 34.355.625,66</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Acumulado Geral</label>
                                                    <label class="text-info fw-600">R$ 560.543.465,29</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xl-4 col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Prevista Inicial</label>
                                                    <br>
                                                    <label class="text-info fw-600">R$ 526.000.000,00</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Prevista Atualizada</label>
                                                    <br>
                                                    <label class="text-info fw-600">R$ 526.000.000,00</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Arrecadada</label>
                                                    <br>
                                                    <label class="text-info fw-600">R$ 529.319.953,69</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xl-10 col-sm-11 mb-3 card mb-3">
                                            <div class="card-chart">
                                                <div class="card-header text-muted">
                                                    Receitas 2022
                                                </div>
                                                <div class="card-body">
                                                    <canvas id="graficoReceitas" width="100" height="50"></canvas>
                                                </div>
                                                <div class="card-footer small text-muted">Atualizado em 06/11/2022</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-2">
                                    <div class="p-4">
                                        <h3>Despesas Orçamentárias 2022</h3>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xl-auto col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Acumulado Empenhado</label>
                                                    <label class="text-info fw-600">R$ 31.554.778,54</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Acumulado Anulado</label>
                                                    <label class="text-danger fw-600">R$ -4.514.950,62</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Acumulado Liquidado</label>
                                                    <label class="text-info fw-600">R$ 25.794.941,34</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Acumulado Pago</label>
                                                    <label class="text-info fw-600">R$ 34.586.148,58</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Acumulado Saldo</label>
                                                    <label class="text-info fw-600">R$ 77.220.908,40</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xl-4 col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Fixada Inicial</label>
                                                    <br>
                                                    <label class="text-info fw-600">R$ 511.550.000,00</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Fixada Atualizada</label>
                                                    <br>
                                                    <label class="text-info fw-600">R$ 681.311.788,44</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 mb-3 text-align-wk-center">
                                            <div class="card border-cards w-95">
                                                <div class="card-body">
                                                    <label class="title-cards">Executada</label>
                                                    <br>
                                                    <label class="text-info fw-600">R$ 560.527.663,62</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xl-10 col-sm-11 mb-3 card mb-3">
                                            <div class="card-chart">
                                                <div class="card-header text-muted">
                                                    Despesas 2022
                                                </div>
                                                <div class="card-body">
                                                    <canvas id="graficoDespesas" width="100" height="50"></canvas>
                                                </div>
                                                <div class="card-footer small text-muted">Atualizado em 06/11/2022</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </main>
        <!--/main-->

        <footer>
            <?php include('../../components/footer.php') ?>
        </footer>
        <!--/footer-->
    </div>
    <!-- page -->

    <!-- COMMON SCRIPTS -->
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/common_scripts.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../assets/validate.js"></script>

    <script src="../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../js/admin-charts-all.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const grafReceitas = document.getElementById('graficoReceitas');
        new Chart(grafReceitas, {
            type: 'bar',
            data: {
                labels: ['Prevista Inicial', 'Prevista Atualizada', 'Arrecadada'],
                datasets: [{
                    label: 'Reais (R$)',
                    data: [526000000, 526000000, 529319953.69],
                    borderWidth: 1,
                    borderRadius: 8,
                    borderColor: '#142E4C',
                    backgroundColor: '#142E4C'
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        
        const grafDespesas = document.getElementById('graficoDespesas');
        new Chart(grafDespesas, {
            type: 'bar',
            data: {
                labels: ['Fixada Inicial', 'Fixada Atualizada', 'Executada'],
                datasets: [{
                    label: 'Reais (R$)',
                    data: [511550000.00, 681311788.44, 560527663.62],
                    borderWidth: 1,
                    borderRadius: 8,
                    borderColor: '#142E4C',
                    backgroundColor: '#142E4C'
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    </script>
</body>

</html>