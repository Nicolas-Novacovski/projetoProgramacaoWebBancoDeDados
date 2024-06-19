<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="wwwroot/site.css">
    <title>Tela de Login</title>
</head>
<body>
    <div>
        <div class="wrapper">
            <div class="container">
                <div class="row justify-content-md-center">   
                    <div class="col-6">                 
                        <img class="iconeCadastro" src="imgs/iconeUser.png" alt="">
                    </div>
                    <div class="col-6 loginPai">
                        <b class="titulo">Realize seu login</b>
                        <form class="menuLogin" action="login.php" method="post">
                            <input class="customBox formControl" type="type" placeholder="Email" name="login">
                            <input class="customBox formControl" type="password" placeholder="Senha" name="senha">
                            <div class="loginBaixo">
                                <input class="btn btn-primary2 btnLogin" style="width:100%" type="submit" value="login">
                                <a href="formCadastro.php" class="texto-cadastro">Não tem cadastro? Clique aqui para se cadastrar</a>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>