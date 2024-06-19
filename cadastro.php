<html>

<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

include_once 'db.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();

// Instanciar o objeto User
$user = new User($db);

var_dump($_POST);

$user->login = $_POST["login"];
$user->senha= MD5($_POST["senha"]);
$user->created_at = date('Y-m-d H:i:s');
$user->name = $_POST['name'];
$user->last_name = $_POST['last_name'];
$user->phone = $_POST['phone'];
$user->adress = $_POST['adress'];



  if($user->login == "" || $user->login == null){
    echo "<script language='javascript' type='text/javascript'>
    Swal.fire({
        icon: 'error',
        title: 'Ooops...',
        text: 'Todos os campos devem estar preenchidos!',
    }) .then((result) => {
            console.log(result);
            if (result.isConfirmed || result.isDismissed) {
                window.location.href = 'formCadastro.php';
            }
    });
    </script>";

    }else{
        $insert= $user->create();

        if($insert){
          echo "<script language='javascript' type='text/javascript'>
          Swal.fire({
              icon: 'success',
              title: 'Sucesso',
              text: 'O usuário foi cadastrado com sucesso',
          }) .then((result) => {
                  console.log(result);
                  if (result.isConfirmed || result.isDismissed) {
                      window.location.href = 'indexLogin.php';
                  }
          });
          </script>";
        }else{
          echo "<script language='javascript' type='text/javascript'>
          Swal.fire({
              icon: 'error',
              title: 'Ooops...',
              text: 'Não foi possível cadastrar esse usuário!',
          }) .then((result) => {
                  console.log(result);
                  if (result.isConfirmed || result.isDismissed) {
                      window.location.href = 'formCadastro.php';
                  }
          });
          </script>";
        }
      
    }
}

?>

</body>
</html>