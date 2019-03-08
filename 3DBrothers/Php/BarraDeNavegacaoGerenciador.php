<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="Sistema/BarraNavegacao/BarraNavegacaoGerenciador.css">
        <link rel="stylesheet" type="text/css" media="screen" href="Sistema/Corpo/Corpo.css">
    </head>
    <body>
        <header>
            <nav class="navigationBar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 offset-8">
                            <ul class="nav">
                                <li class="nav-item nLink">
                                    <a class="nav-link aLink" href="../GerenciaFotos.php">Fotos</a>
                                </li>
                                <li class="nav-item nLink">
                                    <a class="nav-link aLink" href="../GerenciaMensagens.php">Mensagem</a>
                                </li>
                                <li class="nav-item nLink">
                                    <a class="nav-link aLink" href="#">Site</a>
                                </li>
                                <li class="nav-item nLabel">
                                    <!----Dropdown------->
                                    <label onclick="ativaBar();" onmouseover="ativaBar();" id="title" class="EstiloLabelBarra" href="#">Login</label>
                                    <div class="reveal" style='z-index:2;' onmouseleave="tiraMenu();" id="ALink">
                                        <button id="Botao1" class="BotaoBox">Cadastrar</button>
                                        <button id="Botao2" class="BotaoBox">Sair</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <script type="text/javascript" src="Sistema/BarraNavegacao/JavascriptGer.js"></script>
        </header>