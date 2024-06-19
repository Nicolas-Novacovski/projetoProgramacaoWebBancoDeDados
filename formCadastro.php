<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="wwwroot/site.css" style="width: 100px;" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-md-center">   
                <div class="col-5">                 
                    <img class="iconeCadastro mt-4" src="imgs/iconeUser.png" alt="">
                </div>
                <div class="col-7">
                    <b class="titulo">Realize seu Cadastro</b>
                    <form action="cadastro.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <label for="name" style="white-space:nowrap;" class="formLabel mb-1">NOME</label><br />
                                <input style="width: 100%;" class="customBox formControl" type="text" id="name" name="name">
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="last_name" style="white-space:nowrap;" class="formLabel mb-1">SOBRENOME</label><br />
                                <input style="width: 100%;" class="customBox formControl" type="text" id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <label for="phone" style="white-space:nowrap;" class="formLabel mb-1">TELEFONE</label><br />
                                <input style="width: 100%;" class="customBox formControl" type="text" id="phone" name="phone">                            
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="adress" style="white-space:nowrap;" class="formLabel mb-1">ENDEREÇO</label><br />
                                <input style="width: 100%;" class="customBox formControl" type="text" id="adress" name="adress">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <label for="login" style="white-space:nowrap;" class="formLabel mb-1">EMAIL</label><br />
                                <input style="width: 100%;" class="customBox formControl" type="email" id="login" name="login">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <label for="senha" style="white-space:nowrap;" class="formLabel mb-1">SENHA</label><br />
                                <input style="width: 100%;" class="customBox formControl" type="password" id="senha" name="senha">
                            </div>
                        </div>
                        <div class="row">                          
                            <div class="col-lg-12 col-sm-12">
                                <input class="btn btn-primary2" style="width: 100%;" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                            </div>
                        </div>           
                        <div class="loginBaixo">
                            <a href="indexLogin.php" class="texto-cadastro">Já tem login? Clique aqui para se conectar</a>
                        </div>    

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
