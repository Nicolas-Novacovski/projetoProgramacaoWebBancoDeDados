<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_produtos = $_POST['id_produtos'];

    $database = new Database();
    $conn = $database->getConnection();

    $query = "DELETE FROM produtos WHERE id_produtos = :id_produtos";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_produtos', $id_produtos);

    $response = array();

    if ($stmt->execute()) {
        $response['success'] = true;
    } else {
        $response['success'] = false;
    }

    echo json_encode($response);
}
?>
