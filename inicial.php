<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect House</title>
    <link rel="stylesheet" href="css/inicial.css">
    <link rel="shortcut icon" href="img/logo_imobiliaria_png.png" type="image/x-icon">
    <link rel="stylesheet" href="css/slideshow.css">
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

    <!-- SLIDESHOW -->
    <div class="slide">
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="img/land.jpg" style="width:100%; max-height: 600px;">
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="img/chalet_edit.jpg" style="width:100%; max-height: 600px;">
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="img/banner-slider-edit.jpg" style="width:100%; max-height: 600px;">
            </div>
          
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div><br>
          
    </div>

  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
    }
    
  </script>
   
    <!-- PART OF PESQUISA -->
    <!--<h3 id="titulo">O QUE VOCÊ DESEJA</h3><br>-->
    <div class="container">
        <div class="box">
            <input class="botao" type="button" onclick="insereTexto(1)" value="Alugar" aria-selected="true">
            &nbsp; &nbsp;
            <input class="botao" type="button" onclick="insereTexto(2)" value="Comprar" aria-selected="false">
            <script>
                function insereTexto(x)
                {
                    if (x == 1) {
                    
                        document.getElementById('aluga-compra')
                        .innerHTML = '<p id="pesquise">Comprar na região</p>';
                    }
                    else {
                        document.getElementById('aluga-compra')
                        .innerHTML = '<p id="pesquise">Alugar na região</p>';
                    }
                }
            </script>
            <div id="resultado">
                <div id="aluga-compra">
                    <p id="pesquise">Busque sua nova casa pela região que deseja</p>
                </div>
                <div id="pesquisa">
                    <form class="form-busca-site" action="busca.php">
                        <input class="btn-text-top" type="text" name="txtsearch" placeholder="Busque pela região">
                        <div><button class="btn-buscar-top" type="submit"></button></div>
                      </form>
                </div>
            </div>
        </div>
        
    </div>
    
    <!-- SELECTION OF IMOVEIS -->
    <h2 id="casas">Casas</h2><br>
    <h4 id="h4">Confira algumas de nossas casas disponiveis</h4>
    
    <!--<hr class="after"> LINHA HTML -->
    <section id="div">
        <a href="pagina1.html" class="descricao">
            <div class="anuncio">
                <div class="divimg"><img class="divimg" src="img/pagina1/Imagem4.jpg" alt=""></div>
                <!--<div class="div imagem"><img src="img/car JDM.jpg" alt=""></div>-->
                <div class="titulo">Planalto</div>
                <div class="informacoes">Casa nova, moderna, plana, totalmente independente e ampla área externa.
                Acabamentos em porcelanato, vinílico e granito. Teto rebaixado com iluminação de led nas salas.
                Churrasqueira, ducha, interfone, portão eletrônico.</div>
                <div class="end">Clique e saiba mais</div>
            </div>
        </a>
        
        <a href="pagina2.html" class="descricao">
            <div class="anuncio">
                <div class="divimg"><img class="divimg" src="img/pagina2/Imagem1.jpg" alt=""></div>
                <!--<div class="imagem"><img src="img/minions_png.png" alt=""></div>-->
                <div class="titulo">Alphaville</div>
                <div class="informacoes">Casa para aluguel: Condomínio Tamboré 3, Terreno 1079 m², Construção 700m², 4 vagas de garagem, 4 suítes com Ar Condicionado e novos acabamentos metálicos, Tacos da sala e suítes revitalizados Ar Condicionado...</div>
                <div class="end">Clique e saiba mais</div>
            </div>
        </a>
        
        <a href="pagina3.html" class="descricao">
            <div class="anuncio">
                <div class="divimg"><img class="divimg" src="img/pagina3/Imagem1.jpg" alt=""></div>
                <!--<div class="imagem"><img src="img/sampameo.jpg" alt=""></div>-->
                <div class="titulo">Conjunto Residencial Morumbi</div>
                <div class="informacoes">Condomínio de casa fechado, com segurança 24 hrs e uma localização excelente, estando atrás do COLÉGIO MORUMBI SUL. São 450 metros, 3 suítes (sendo uma master). Sauna, piscina, churrasqueira e um espaçoso...</div>
                <div class="end">Clique e saiba mais</div>
            </div>
        </a>
        
        <a href="pagina4.html" class="descricao">
            <div class="anuncio">
                <div class="divimg"><img class="divimg" src="img/pagina4/Imagem4.jpg" alt=""></div>
                <!--<div class="imagem"><img src="img/sampa.jpg" alt=""></div>-->
                <div class="titulo">Lapa</div>
                <div class="informacoes">3 suítes, copa cozinha ampla e arejada, sala para 3 ambientes com lareira, boa área de serviço com dependência, escritório, piscina, churrasqueira, entrada lateral, salão de festa, terraço e 7 vagas de garagem...</div>
                <div class="end">Clique e saiba mais</div>
            </div>
        </a>
    </section><br><br><br><br>

    <h2 id="ap">Apartamentos</h2><br>
    <h4 id="h4">Confira alguns de nossos apartamentos disponiveis</h4>
    <section id="div">
        <a href="pagina5.html" class="descricao">
            <div class="anuncio">
                <div class="divimg"><img class="divimg" src="img/pagina5/1.jpg" alt=""></div>
                <!--<div class="div imagem"><img src="img/car JDM.jpg" alt=""></div>-->
                <div class="titulo">Apartamento De Alto Padrão</div>
                <div class="informacoes">Excelente  Apartamento Studio De Alto Padrão Mobiliado, Ar-Condicionado, Com 47 M² De Área Útil, Possui 01 Dormitório, Cozinha Americana, Living Amplo Integrado a Varanda, Área de Serviço, 01 Vaga Na Garagem. Vila Nova Conceição</div>
                <div class="end">Clique e saiba mais</div>
            </div>
        </a>
        
        <a href="pagina6.html" class="descricao">
            <div class="anuncio">
                <div class="divimg"><img class="divimg" src="img/pagina6/apart1.jpg" alt=""></div>
                <!--<div class="imagem"><img src="img/minions_png.png" alt=""></div>-->
                <div class="titulo">Apartamento com 4 quartos para alugar em Alto De Pinheiros - SP</div>
                <div class="informacoes">Condomínio Praça Villa Lobos dispensa apresentações... Com a facilidade de entrada para o Shopping Villa Lobos à sua disposição, é um grande diferencial. Com vista fantástica e permanente, reúne conforto e sofisticação...</div>
                <div class="end">Clique e saiba mais</div>
            </div>
        </a>
        
        <a href="pagina7.html" class="descricao">
            <div class="anuncio">
                <div class="divimg"><img class="divimg" src="img/pagina7/imagem1.jpg" alt=""></div>
                <!--<div class="imagem"><img src="img/sampameo.jpg" alt=""></div>-->
                <div class="titulo">Apartamento  Alto Padrão  São Paulo -SP</div>
                <div class="informacoes">Apartamento para alugar na Vila Nova Conceição com 4 quartos ,3 suítes, living amplo integrado a varanda panorâmica para o Parque Ibirapuera, armários de qualidade, piso em tacos na área intima e ar-condicionado em todo o...</div>
                <div class="end">Clique e saiba mais</div>
            </div>
        </a>
        
        <a href="pagina8.html" class="descricao">
            <div class="anuncio">
                <div class="divimg"><img class="divimg" src="img/pagina8/imagem1.png" alt=""></div>
                <!--<div class="imagem"><img src="img/sampa.jpg" alt=""></div>-->
                <div class="titulo">Apartamento com 4 quartos à venda ou para alugar em Higienópolis - SP</div>
                <div class="informacoes">Apartamento encantador, sofisticado, bem ensolarado, arejado e claro, face norte, localizado no charmoso e procurado bairro de Higienópolis. Excelente planta e distribuição, com ambientes amplos, que permitem ótimo ap...</div>
                <div class="end">Clique e saiba mais</div>
            </div>
        </a>
    </section><br><br><br>

    
    <!-- RODAPE -->
    <footer>
        <div id="rodape">
            <h5 id="rodape2">&copy; 2023 Perfect House. Todos os direitos reservados.</h5>
        </div>
    </footer>

</body>
</html>