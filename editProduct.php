<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_produtos = $_POST['id_produtos'];
    $nome_produto = $_POST['nome_produto'];
    $qntd_produto = $_POST['qntd_produto'];
    $valor_produto = $_POST['valor_produto'];

    $database = new Database();
    $conn = $database->getConnection();

    $query = "UPDATE produtos SET 
              nome_produto = :nome_produto, 
              qntd_produto = :qntd_produto, 
              valor_produto = :valor_produto 
              WHERE id_produtos = :id_produtos";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_produtos', $id_produtos);
    $stmt->bindParam(':nome_produto', $nome_produto);
    $stmt->bindParam(':qntd_produto', $qntd_produto);
    $stmt->bindParam(':valor_produto', $valor_produto);

    $response = array();

    if ($stmt->execute()) {
        $response['success'] = true;
    } else {
        $response['success'] = false;
    }

    echo json_encode($response);
}
?>
