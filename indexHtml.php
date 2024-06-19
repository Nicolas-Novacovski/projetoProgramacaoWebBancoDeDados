<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <title>Index</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#logoutlink').click(function(e) { 
                e.preventDefault(); 

                $.ajax({
                    url: 'logout.php',
                    type: 'POST', 
                    success: function(response) {
                        window.location.href = 'indexLogin.php';
                    },
                    error: function(xhr, status, error) {
                        console.error('Erro ao fazer logout:', error);
                        alert('Erro ao fazer logout. Tente novamente.');
                    }
                });
            });
        });
    </script>
</head>
<body>
    <header class="cabecalho">
        <img class="cabecalho-img" src="imgs/logo.png" alt="logo">
        <nav class="cabecalho-menu">
            <a class="cabecalho-item" href="#produtos">Produtos</a>
            <a class="cabecalho-item" href="#sobre">Sobre nós</a>
            <a class="cabecalho-item" href="#faq">FAQ</a>
            <a class="cabecalho-item" href="produtosHtmlUser.php">Nossos Produtos</a>
            <a class="cabecalho-item" href="#" id="logoutlink" style="color:red;">Logout</a>
        </nav>
    </header>
    <main>
        <section class="conteudo-principal">
            <h1 id="produtos" class="conteudo-principal-titulo">Nossos produtos e ofertas</h1>
            <section class="cards" id="sobre">
                <div class="cards-div">
                    <!-- Card 1 -->
                    <div class="corpo-card">
                        <img decoding="async" src="imgs/celular.jpg" alt="imagem do card 1 html e css">
                        <div class="borda">
                            <h6 id="desconto"><s>R$1.099</s></h6>
                            <h3>R$ 751,00</h3>
                            <p>Smartphone Motorola Moto G14 4G 128GB Grafite 4GB RAM.</p>
                        </div>
                    </div>
            
                    <!-- Card 2 -->
                    <div class="corpo-card">
                        <img id="img-segundo-card" decoding="async" src="imgs/notebook.png" alt="imagem do card 2 html e css">
                        <div class="borda">
                            <h6 id="desconto"><s>R$2.554</s></h6>
                            <h3>R$ 2.049</h3>
                            <p>Notebook Samsung Galaxy Book2 Intel Core I3-1215U, 4GB, 256GB</p>
                        </div>
                    </div>
            
                    <!-- Card 3 -->
                    <div class="corpo-card">
                        <img decoding="async" src="imgs/airfryer.png" alt="imagem do card 3 html e css">
                        <div class="borda">
                            <h6 id="desconto"><s>R$586</s></h6>
                            <h3>R$ 329,90</h3>
                            <p>Fritadeira Sem Óleo Air Fryer Afn-40-btf 4l 1500w Mondial Cor Preto</p>
                        </div>
                    </div>
        
                    <div class="corpo-card">
                        <img decoding="async" src="imgs/caixaSom.png" alt="imagem do card 3 html e css">
                        <div class="borda">
                            <h6 id="desconto"><s>R$549</s></h6>
                            <h3>R$ 415</h3>
                            <p>Caixa Amplificada Connect Lights Cm-400 Preta Mondial Bivolt Cor Preto</p>
                        </div>
                    </div>
        
                    <div class="corpo-card">
                        <img id="tv-img" decoding="async" src="imgs/tv.png" alt="imagem do card 3 html e css">
                        <div class="borda">
                            <h6 id="desconto"><s>R$3.498</s></h6>
                            <h3>R$ 2.176</h3>
                            <p>Smart Tv LG 50 Led 4k Uhd Wi-fi Bluetooh Hdr10 50ur871c0sa</p>
                        </div>
                    </div>
        
                    <div class="corpo-card">
                        <img id="microondas-img" decoding="async" src="imgs/microondas.png" alt="imagem do card 3 html e css">
                        <div class="borda">
                            <h6 id="desconto"><s>R$679</s></h6>
                            <h3>R$ 569</h3>
                            <p>Microondas Panasonic Nn-st27lwru Branco 21 127v</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section class="conteudo-secundario">
            <h2 id="sobre" class="conteudo-secundario-titulo">Sobre nós</h2>
            <p class="conteudo-secundario-texto">Somos uma empresa de tecnologia que tem como objetivo democratizar o comércio eletrônico oferecendo a melhor plataforma e os serviços necessários para que pessoas e empresas possam comprar, pagar, vender, enviar, anunciar e gerir seus negócios na Internet.</p>
            <p class="conteudo-secundario-texto-baixo">Nascemos em 1999, na Argentina, e atualmente, operamos em 18 países. Nosso marketplace – MercadoLivre.com – é o maior da América Latina, reunindo milhões de vendedores e compradores a partir de mais de 60 milhões de ofertas de produtos, automóveis e serviços em tempo real.</p>
        </section>
        
        <section class="conteudo-terciario">
            <h2 id="faq" class="conteudo-terciario-titulo">Perguntas frequentes</h2>
            <img class="conteudo-terciario-img" src="imgs/faq.png" alt="">
        </section>
    </main>
    <footer class="rodape">
        <img class="rodape-img" src="imgs/rodape.png" alt="">
    </footer>
</body>
</html>