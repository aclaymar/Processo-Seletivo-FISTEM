<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="A Tanto Faz, empresa de delivery de Marmitas">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
			// Place this in your between your <head> and </head> tags
			require_once("nuggetz/init.php");
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
    <header class="menu-principal">
        <main>
            <div class="header-1">
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
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="entrega.php">Entrega</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="">Carrinho</a></li>
                </ul>
            </div>
            <div class="busca">
                <input placeholder="Qual Marmita Mesmo?" type="text">
            </div>
        </div>

<!-- Criado o formulário para o usuário colocar os dados de acesso.  -->
        <form method="POST" action="valida.php">
            <h2>ACESSO</h2>
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" required autofocus>
            <label>Senha</label>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Acessar</button>
        </form>
        <p>
            <?php 
			//Recuperando o valor da variável global, os erro de login.
			if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
        <p>
            <?php 
			//Recuperando o valor da variável global, deslogado com sucesso.
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
        </p>        </div>
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
        <div id="dropDownSelect1"></div>
	
        <!--===============================================================================================-->
            <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/bootstrap/js/popper.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/daterangepicker/moment.min.js"></script>
            <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
            <script src="js/main.js"></script>  
    
</body>