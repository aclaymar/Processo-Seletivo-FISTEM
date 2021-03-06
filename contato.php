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
                    <li><a href="Login.php">Minha Conta</a></li>
                    <li><a href="entrega.php">Entrega</a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Carrinho</a></li>
                </ul>
            </div>
            <div class="busca">
                <input placeholder="Qual Marmita Mesmo?" type="text">
            </div>
        </div>
        <div class="content texto">
            <h1>ENTRE EM CONTATO</h1>
            <p>Entre em contato em caso de dúvidas, possíveis projetos e parcerias comerciais.</p>
            <div class="email">
                <img src="./img/chat.jpg" alt="email">
                <h2>Tá sem tempo? Manda um e-mail!</h2>
                <p>fale@tantofaz.com.br</p>
            </div>
            <div class="celular">
                <img src="./img/celular.jpg" alt="celular">
                <h2>Se quiser bater um papo, ligue:</h2>
                <p>(11)97402-9844</p>
            </div>
            <div class="Parceria">
                <img src="./img/joinha.jpg" alt="parceria">
                <h2>Parceria</h2>
                <p>Há muitas formas de fazer uma parceria com a S2 Foods! Podemos realizar uma infinidade de ações entre a S2 e a sua marca. Para saber mais, entre em contato através do e-mail fale@tantofaz.com.br</p>
            </div>
            <div class="rh">
                <img src="./img/joinha.jpg" alt="rh">
                <h2>Quer trabalhar na S2 Foods?</h2>
                <p>Você pode se candidatar utilizando o e-mail fale@tantofaz.com.br. Depois, é só torcer para que uma oportunidade dentro do seu perfil apareça logo. Nossa equipe de Gente & Gestão entrará em contato. 😉</p>
            </div>
            <form method='post' action='enviar_email.php'>
                <div>
                    <label for="name">Nome:</label>
                    <input type="text" id="name" />
                </div>
                <div>
                    <label for="mail">E-mail:</label>
                    <input type="email" id="mail" />
                </div>
                <div>
                    <label for="msg">Mensagem:</label>
                    <textarea id="msg" name='mensagem'></textarea>
                </div>
                <div class="button">
                    <button type="submit" name='enviar' value='Enviar'>Enviar sua mensagem</button>
                </div>
            </form>


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
</body>