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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="">Carrinho</a></li>
                </ul>
            </div>
            <div class="busca">
                <input placeholder="Qual Marmita Mesmo?" type="text">
            </div>
        </div>
        <div class="content texto">
            <h1>1. Prazos de entrega</h1>
            <p>Durante o processo de Compra, a TANTO FAZ informará ao Cliente uma estimativa de prazo para a entrega dos Produtos. Essa estimativa leva em conta os produtos adquiridos, as suas quantidades, o estoque disponível e a distância entre nossas centrais de distribuição e o endereço de entrega informado pelo Cliente. O prazo de entrega será contado a partir da data de aprovação do pedido, que pode ocorrer em até 3 (três) dias úteis para pagamentos por cartão de crédito.</p>
            <h1>2. Horário de entrega e agendamento</h1>
            <p>A TANTO FAZ efetua as entregas de Produtos entre segunda-feira e sexta-feira, das 09:00 às 22:00. A TANTO FAZ disponibiliza o serviço de agendamento de entrega, sem custo adicional. A TANTO FAZ agenda as entregas entre segunda-feira e sexta-feira e em três turnos: manhã (das 10:00 às 12:30), tarde (das 12:30 às 18:00) e noite (das 18:00 às 22:00). Não será possível alterar a data ou o turno da entrega após o agendamento. A data e turno agendados serão concretizados apenas após a confirmação do pagamento. Se a confirmação do pagamento de seu pedido prejudicou a data inicial de agendamento da sua entrega, uma nova data será disponibilizada.</p>
            <h1>3. Valor do frete</h1>
            <p>O valor do frete da entrega dos Produtos é calculado automaticamente pelo Site no momento da Compra, a partir da distância entre nossos centros de distribuição e o local de entrega informado pelo Cliente.</p>
            <h1>4. Condições da entrega</h1>
            <p>Em edifícios, a entrega será efetuada no local da portaria, sendo o Cliente exclusivamente responsável pela guarda e transporte dos produtos até seu andar e unidade. Para que a entrega seja realizada, é necessário que o Cliente autorize uma pessoa maior de 18 anos (amigos, parentes, porteiros ou outra) para receber e conferir os produtos.</p>
            <h1>5. Recusa de recebimento</h1>
            <p>O Cliente poderá e deverá verificar os seguintes aspectos no momento do recebimento: (i) se a embalagem estiver aberta, violada ou danificada; (ii) se o Produto estiver avariado pelo transporte, aberto, violado ou usado; (iii) se os Produtos entregues não corresponderem aos Produtos adquiridos pelo Site ou, ainda, (iv) se o conteúdo das embalagens estiver incompleto. Em caso de qualquer divergência, o Cliente deverá recusar-se a receber o Produto em questão e entrar em contato com o atendimento TANTO FAZ para imediata solução do problema identificado. Caso haja o recebimento indevido do produto, o Cliente poderá requerer sua troca apenas nos casos previstos na Política de Trocas e Devoluções.</p>
            <h1>6. Tentativas de entrega</h1>
            <p>A TANTO FAZ entregará os Produtos adquiridos, no prazo estabelecido e no endereço informado pelo Cliente. Caso não seja possível a TANTO FAZ realizar a entrega dos Produtos por ausência do Cliente, de pessoa autorizada, por restrições de horário do condomínio ou por limitações físicas que impeçam a entrega ou, ainda, por erro do Cliente em indicar o local correto da entrega no ato da compra dos Produtos, a TANTO FAZ fará mais duas tentativas subsequentes. Caso as três tentativas de entrega fracassem, os produtos adquiridos serão devolvidos à central de distribuição, o pedido será cancelado.</p>
            <h1>7. Devolução por erro no cadastro</h1>
            <p>A TANTO FAZ não se responsabiliza caso o pedido seja entregue no endereço incorreto por erro de cadastramento. Os dados cadastrais são de inteira responsabilidade do cliente. Caso haja algum problema na entrega dos produtos por erro no endereço cadastrado, o custo de reenvio dos produtos será de responsabilidade do cliente, inclusive do novo produto, na eventualidade do 1º produto não ser localizado.</p>
            <h1>8. Diversos</h1>
            <p>Alterações do pedido. A TANTO FAZ não aceitará alterações do pedido (formas de pagamento, quantidades, local, data ou turno da entrega) após a finalização do processo de Compra no Site. Atrasos. Algumas situações excepcionais podem causar atrasos na entrega dos Produtos adquiridos, como a indicação de um endereço errado, incompleto ou inexistente ou a ocorrência de fatores naturais (chuvas, enchentes) ou humanos (greves, manifestações, acidentes), conhecidos como eventos de caso fortuito e força maior. Nestes casos, a TANTO FAZ fará o possível para manter o Cliente informado com relação ao problema que causou o atraso e para efetivar a entrega no menor prazo possível.</p>
            <p>Alertas. A TANTO FAZ poderá enviar e-mails ou mensagens SMS/whatApps ao Cliente a fim de informar qualquer alteração no processo de entrega de seu pedido, como a saída dos produtos do centro de distribuição, o deslocamento pela cidade, o horário estimado de entrega, eventuais atrasos, entre outros.</p>
            <h1>9. Atendimento ao cliente</h1>
            <p>Caso tenha qualquer dúvida em relação à Política de entrega, troca e devolução de produtos, entre em contato pelos seguintes canais: <br>
                a) via e-mail: através do endereço eletrônico fale@tantofaz.com.br <br>
                b) pelo telefone: (011) 974029844 de segunda a sexta das 9h às 18h. <br>
                c) via WhatsApp: (011) 974029844 de segunda a sexta das 9h às 18h.</p>
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