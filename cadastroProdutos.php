<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/site.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/cadastroProduto.js"></script>
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
    <title>Index</title>
</head>
<body>
    <header class="cabecalho">
        <img class="cabecalho-img" src="imgs/logo.png" alt="logo">
        <nav class="cabecalho-menu">
            <a class="cabecalho-item" href="indexAdminHtml.php">Produtos</a>
            <a class="cabecalho-item" href="indexAdminHtml.php">Sobre nós</a>
            <a class="cabecalho-item" href="produtosHtmlAdmin.php">Nossos Produtos</a>
            <a class="cabecalho-item" href="cadastroProdutos.php">Cadastro de produtos</a>
            <a href="#" id="logoutlink" style="color:red;">Logout</a>
        </nav>
    </header>
    <main>
        <div class="wrapper">
            <div class="container">
                <div class="row justify-content-md-center">   
                    <div class="col-5">                 
                        <img class="iconeCadastroProduto mt-4" src="imgs/iconeProduto.png" alt="">
                    </div>
                    <div class="col-7">
                        <b class="titulo">Cadastre o Produto</b>
                        <form action="cadastroProduto.php" id="cadastroProduto" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="nome_produto" style="white-space:nowrap;" class="formLabel labelCadastro mb-1">NOME DO PRODUTO</label><br />
                                    <input style="width: 100%;" class="customBox formControl customBoxCadastro" type="text" id="nome_produto" name="nome_produto">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="qntd_produto" style="white-space:nowrap;" class="formLabel labelCadastro mb-1">QUANTIDADE DO PRODUTO</label><br />
                                    <input style="width: 100%;" class="customBox formControl customBoxCadastro" type="number" id="qntd_produto" name="qntd_produto">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="valor_produto" style="white-space:nowrap;" class="formLabel labelCadastro mb-1">VALOR DO PRODUTO POR UNIDADE</label><br />
                                    <input style="width: 100%;" class="customBox formControl customBoxCadastro" type="text" id="valor_produto" name="valor_produto">
                            <div class="row">                          
                                <div class="col-lg-12 col-sm-12">
                                    <input class="btn btn-primary2" style="width: 100%;" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                                </div>
                            </div>                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="rodape">
        <img class="rodape-img" src="imgs/rodape.png" alt="">
    </footer>
</body>
</html>
