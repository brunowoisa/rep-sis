<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ERP-SIS</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo $base_url; ?>assets/binary/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo $base_url; ?>assets/binary/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?php echo $base_url; ?>assets/binary/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">REP-SIS</a> 
            </div>

            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> Usuário Logado: <?php echo $user; ?> &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Sair</a>
            </div>
        </nav><!-- /. NAV TOP  -->

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="<?php echo $base_url; ?>home/"><i class="fa fa-qrcode fa-3x"></i> Início</a>
                    </li>

                    <li>
                        <a  href="<?php echo $base_url; ?>empresa/"><i class="fa fa-desktop fa-3x"></i> Dados da Empresa</a>
                    </li>

                    <li>
                        <a  href="<?php echo $base_url; ?>funcionarios/"><i class="fa fa-edit fa-3x"></i> Funcionários</a>
                    </li>       

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-3x"></i> Relatórios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Relatório de Batida de Ponto</a>
                            </li>

                            <li>
                                <a href="#">Relatório de Banco de Horas</a>
                            </li>
                        </ul>
                    </li>  
                </ul>
            </div>
        </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
    <div id="page-inner">
    <div class="row">
