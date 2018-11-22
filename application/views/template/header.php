
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!--<meta charset="UTF-8">-->

        <title>Lojão torra torra</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="<?php // echo base_url('imagens/faviconComFundo.png');                ?>">
        <!--Bootstrap-->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>" rel="stylesheet"> 
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet"> 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!--Datatables-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.css"/>

        <!--Bootstrap-->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/util.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css') ?>">
        <!--<link rel="stylesheet" type="text/css" href="css/usuariomain.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/usuarioutil.css') ?>">
        <link rel="shortcut icon" href="images/icons/favicon.ico" />
<!--        <script src="js/userjs.js"></script>-->

    </head>
    <body>
        <?php if ($this->session->userdata('estou_logado')) { ?>
        <div class="container">                         
            <nav class="navbar navbar-expand-lg  navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo base_url() . 'home' ?>"> Lojão Torra-Torra</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url() . 'home'; ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <font style="color:#000">
                                Cadastro
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">



                                <a class="dropdown-item" href="<?php echo base_url() . 'usuario'; ?>">Usuário</a>
                                <a class="dropdown-item" href="<?php echo base_url() . 'cliente'; ?>">Cliente</a>
                                <a class="dropdown-item" href="<?php echo base_url() . 'fornecedor'; ?>">Fornecedor</a>
                                <a class="dropdown-item" href="<?php echo base_url() . 'cidade'; ?>">Cidade</a>
                                <a class="dropdown-item" href="<?php echo base_url() . 'estado'; ?>">Estado</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url() . 'estoqueNovo'; ?>">Estoque</a>
                                <a class="dropdown-item" href="<?php echo base_url() . 'meioPag'; ?>">Meio de Pagamento</a>


                            </div>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url() . 'itensvenda'; ?>"> Venda <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url() . 'relatorio'; ?>"> Relatorio <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
                
                <?php
                if ($this->session->userdata('estou_logado')) {
                    echo $this->session->userdata('logado')->nomeUsuario;
                    ?>
&nbsp;<a class="btn btn-danger" href="<?php echo base_url() . 'login/sair'; ?>">Sair</a>
                <?php } ?>
            </nav>
                <?php } ?>





