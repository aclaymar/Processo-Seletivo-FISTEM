<!DOCTYPE html>
<html  lang="pt=br">
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
    <title>Formulários de Cadastro</title>
    <meta charset="utf-8">
 </head>
 <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="Login.php">Minha Conta</a></li>
                    <li><a href="entrega.php">Entrega</a></li>
                    <li><a href="contato.php">contato</a></li>
                    <li><a href="">Carrinho</a></li>
                </ul>
            </div>
            <div class="busca">
                <input placeholder="Qual Marmita Mesmo?" type="text">
            </div>
        </div>

<body>
<form name="cadastro" action="processa.php" method="POST" accept-charset='UTF-8'>
<label>Nome:</label>
 <input type="text" name="nome" size="30" placeholder="Digite seu nome aqui" autofocus /><br>
<label>Sobrenome:</label>
 <input type="text" name="sobrenome" size="50 placeholder="Digite seu sobrenome aqui"/><br>
<br>
<label>Senha:</label>
 <input type="password" name="senha" size=15 required><br>
<br>
Sexo: <br/>
 <input type="radio" name="sexo" value="M"> Masculino<br>
 <input type="radio" name="sexo" value="F"> Feminino<br>
 <input type="radio" name="sexo" value="N"> Não Declarado<br>
 <br/>

Selecione um arquivo de seu computador para upload:<br>
 <input type="file" name="arquivo"/><br>
<br>
 <input type="submit" name="submit" value="Enviar" /><br>
 <input type="reset" name="reset" value="Resetar" /><br>
</form>
</body>
</html>