<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="A Tanto Faz, empresa de delivery de Marmitas">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">

        <?php
			// Place this in your between your <head> and </head> tags
            require_once("nuggetz/init.php");
            header("Content-Type: text/html; charset=utf-8");
            $dispatch=new Classes\ClassDispatch();
            include($dispatch->getInclusao());
		?>
        
        <link rel="stylesheet" type="text/css" href="./css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Chivo|Comic+Neue|Gloria+Hallelujah|Liu+Jian+Mao+Cao|Oswald|Permanent+Marker|Roboto+Slab&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <title>Tanto Faz</title>  
        <link rel="icon" type="img/png" href="./img/faviconComida.png"> 
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
</html>
<body>
    <header class="menu-principal" class="img-fluid">
        <main>
            <div class="header-1" class="img-fluid">
                <div class="logo">
                    <img src="./img/Logo.jpg" alt="">
                </div>
                <div class="redes-sociais">
                    <ul>
                        <li><a href=""><img src="./img/facebook.png"></a></li>
                        <li><a href=""><img src="./img/Instagram.png"></li>
                        <li><a href=""><img src="./img/whatsapp.png"></a></li>
                    </ul>
                </div>
            </div>
        </main>
    </header>
    <main class="col-100 menu-urls" class="img-fluid" class="text-fluid">
        <div class="header-2">
            <div class="menu" >
                <ul>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="Login.php">Minha Conta</a></li>
                    <li><a href="entrega.php">Entrega</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="">Carrinho</a></li>
                </ul>
            </div>
            <div class="busca">
                <input placeholder="Qual Marmita Mesmo?" type="text">
            </div>
        </div>
    </main>
    <div class="col-100">
        <div class="slider-principal" class="img-fluid">
            <img src="./img/CS1.jpg"/>
            <img src="./img/Marmita.png"/>
            <img src="./img/vovo.jpg"/>
        </div>
    </div>
    <div class="col-100" class="img-fluid">
        <div class="content texto-destaque">
            <h1>FUNCIONA ASSIM:</h1>
            <div class="funciona">
                <img src="./img/funcionaassim.png">
            </div>
            <h2>OS MAIS PEDIDOS:</h2>
            <div class="col-3">
                <img alt="Marmitaarrozefeijao" title="Arroz, Feijão e Carne Moida" src="img/AFCM.jpg">
                <h3>João do Feijão</h3>
            </div>
            <div class="col-3">
                <img alt="Marmitabife" title="Arroz, Feijão e Bife" src="img/AFB.jpg">
                <h3>Boi Zé</h3>
            </div>
            <div class="col-3">
                <img alt="MarmitaFrango" title="Arroz, Feijão e Frango" src="img/AFF.jpg">
                <h3>Pé de Galinha</h3>
            </div>
        </div>
    </div>
    <!-- <footer>
        <div class="col-100 footer">
            <div class="col-4">
                <h4>PAGAMENTO</h4>
                <img src="img/American.png" alt="pagamento">
                <p>Pague com segurança pelo PagSeguro em até 12 vezes</p>
            </div>
            <div class="col-4">
                <h4>SEGURANÇA</h4>
                <img src="img/protegido.png" alt="proteção">
                <p>Sua compra protegida</p>
            </div>
            <div class="col-4">
                <h4>Rede Sociais</h4>
                <ul>
                    <li><a href=""><img src="./img/facebook.png"></a></li>
                    <li><a href=""><img src="./img/Instagram.png"></li>
                    <li><a href=""><img src="./img/whatsapp.png"></a></li>
                </ul>
                <p>Siga nossas redes e fique por dentro das novidades e promoções</p>
            </div>
        </div>
        <h5>Tanto Faz - © Todos os direitos reservados - 2020 / Desenvolvido por Anderson Martins</h5>
    </footer> -->
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    
</body>
</html>