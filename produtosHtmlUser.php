<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="styles/produtos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <a class="cabecalho-item" href="indexHtml.php">Produtos</a>
            <a class="cabecalho-item" href="indexHtml.php">Sobre nós</a>
            <a class="cabecalho-item" href="indexHtml.php">FAQ</a>
            <a class="cabecalho-item" href="produtosHtmlUser.php">Nossos Produtos</a>
            <a href="#" id="logoutlink" style="color:red;">Logout</a>
        </nav>
    </header>

    <div class="divTitulo">
        <h1 class="titulo">Nossos Produtos</h1>
    </div>
    <div id="products-container">
        <?php
        include 'db.php'; // Arquivo de conexão com o banco de dados

        // Cria uma instância da classe Database e obtém a conexão
        $database = new Database();
        $conn = $database->getConnection();

        // Verifica se a conexão foi estabelecida com sucesso
        if ($conn) {
            $sql = "SELECT id_produtos, nome_produto, qntd_produto, valor_produto, created_at FROM produtos ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class='product'>";
                    echo "<h2>" . $row['nome_produto'] . "</h2>";
                    echo "<p>Quantidade: " . $row['qntd_produto'] . "</p>";
                    echo "<p>Preço: R$ " . number_format($row['valor_produto'], 2, ',', '.') . "</p>";
                    echo "<p>Data de cadastro: " . $row['created_at'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>Nenhum produto encontrado.</p>";
            }
        } else {
            echo "<p>Erro na conexão com o banco de dados.</p>";
        }

        // Fecha a conexão
        $conn = null;
        ?>
    </div>
</body>
</html>




