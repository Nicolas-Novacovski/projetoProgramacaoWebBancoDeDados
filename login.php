<html>


<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>


<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once 'db.php';
    include_once 'User.php';

    $database = new Database();
    $db = $database->getConnection();

    // Instanciar o objeto User
    $user = new User($db);

    // Verificar se os campos login e senha estão definidos
    if (isset($_POST["login"]) && isset($_POST["senha"])) {
        $user->login = $_POST["login"];
        $user->setSenha($_POST["senha"]); // Criptografar a senha usando MD5

        // Verificar se o usuário existe e a senha está correta
        if ($user->login == "" || $user->senha == "") {
            echo "<script language='javascript' type='text/javascript'>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Todos os campos devem estar preenchidos!',
            }) .then((result) => {
                    console.log(result);
                    if (result.isConfirmed || result.isDismissed) {
                        window.location.href = 'indexLogin.php';
                    }
            });
            </script>";
            exit();
        } else {
            // Verificar se é um login de administrador
            if ($user->checkloginAdmin()) {
                echo "<script language='javascript' type='text/javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'Seja bem vindo',
                    text: 'Você fez login como administrador!',
                }) .then((result) => {
                        console.log(result);
                        if (result.isConfirmed || result.isDismissed) {
                            window.location.href = 'indexAdminHtml.php';
                        }
                });
                </script>";
                exit();
            } elseif ($user->checkLogin()) {
                echo "<script language='javascript' type='text/javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'Seja bem vindo',
                    text: 'Você fez login como usuário!',
                }) .then((result) => {
                        console.log(result);
                        if (result.isConfirmed || result.isDismissed) {
                            window.location.href = 'indexHtml.php';
                        }
                });
                </script>";
            } else {
                // Caso as credenciais estejam incorretas para ambos os tipos de login
                echo "<script language='javascript' type='text/javascript'>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Login ou senha incorretos!',
                }) .then((result) => {
                        console.log(result);
                        if (result.isConfirmed || result.isDismissed) {
                            window.location.href = 'indexLogin.php';
                        }
                });
                </script>";
            }
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>
        Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Todos os campos devem estar preenchidos!',
                }) .then((result) => {
                        console.log(result);
                        if (result.isConfirmed || result.isDismissed) {
                            window.location.href = 'indexLogin.php';
                        }
                });</script>";
    }
}
?>

</body>
</html>