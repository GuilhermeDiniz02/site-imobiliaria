<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="css/inicial.css">
    <link rel="stylesheet" href="css/faleconosco.css">
    <link rel="shortcut icon" href="img/logo_imobiliaria_png.png" type="image/x-icon">
</head>
<body>
    <div class="superior">
        <img class="logo" src="img/logo_imobiliaria_png.png" alt="Logotipo Imobiliaria">
        <h2 id="nome">Perfect House</h2>
        <nav id="nav">
            <a href="inicial.php">Home</a>
            <a href="quemsomos.php">Quem somos</a>
            <a href="faleconosco.php">Fale Conosco</a>
            <a href="../sistema/admin/login.php">Entrar</a>
        </nav>
    </div>
    <!--<img class="sampa" src="img/sampameo copia.jpg" alt="sampa meo">-->
    <form action="acao.php" method="POST">
    <h2 id="contato">CONTATO</h2><br>
    <article class="corp">
        <div class="dados"><br>
            <!--Nome-->
            <input class="campo" placeholder="Nome completo" type="text" name="nome" value="" required/><br><br>

            <!--Email-->
            <input class="campo" placeholder="Email" type="email" name="email" value="" required/><br><br>

            <!--Celular-->
            <input class="campo" placeholder="Celular" type="text" name="celular" value="" required><br><br>

            <label class="info">Gostaria de</label><br><br>
            <div id="opcoes">
                <input type="checkbox" name="alugar">
                <label class="opcao">Alugar um imóvel</label>
            </div>
            <div id="opcoes">
                <input type="checkbox" name="comprar">
                <label class="opcao">Comprar um imóvel</label>
            </div>
            <div id="opcoes">
                <input type="checkbox" name="vender">
                <label class="opcao">Vender o seu imóvel</label>
            </div><br><br>

                <label class="info">Para</label><br><br>
            <div id="opcoes">
                <input type="checkbox" name="residencial">
                <label class="opcao">Uso residencial</label>
            </div>
            <div id="opcoes">
                <input type="checkbox" name="comercial">
                <label class="opcao">Uso comercial</label>
            </div><br><br><br>

            <!--Mensagem-->
            <textarea class="mensagem" placeholder="Escreva a sua mensagem" name="mensagem" cols="50" rows="4" style="max-width: 510px; max-height: 82px;"></textarea><br><br>
            
            <input id="enviar" type="submit" value="Enviar mensagem">  
        </div>
        
    </article>
    </form>
    
</body>
</html>