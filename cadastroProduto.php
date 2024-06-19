<?php
header('Content-Type: application/json');

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'db.php';
    include_once 'User.php';

    $database = new Database();
    $db = $database->getConnection();

    // Instanciar o objeto User
    $user = new User($db);

    // Recebe os dados do formulário
    $user->nome_produto = $_POST["nome_produto"];
    $user->created_at = date('Y-m-d H:i:s');
    $user->qntd_produto = $_POST['qntd_produto'];
    $user->valor_produto = $_POST['valor_produto'];

    // Tenta inserir os dados no banco de dados
    $insert = $user->createProduct();

    if ($insert) {
        $response['success'] = true;
    } else {
        $response['success'] = false;
    }
} else {
    $response['success'] = false;
}

echo json_encode($response);
?>