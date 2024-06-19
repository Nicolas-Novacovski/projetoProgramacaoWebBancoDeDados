<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    if (isset($_POST['id_usuarios']) && isset($_POST['name']) && isset($_POST['senha']) && isset($_POST['last_name']) && isset($_POST['adress']) && isset($_POST['phone']) && isset($_POST['login']) && isset($_POST['created_at'])) {
        $restaurant_id = $_POST['id_usuarios'];
        $senha = $_POST['senha'];
        $last_name = $_POST['last_name'];
        $adress = $_POST['adress'];
        $phone = $_POST['phone'];
        $login = $_POST['login'];
        $created_at = $_POST['created_at'];

        $sql = "INSERT INTO usuario (id_usuarios, senha, last_name, adress, phone, login, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $id_usuarios, $senha, $last_name, $adress, $phone, $login, $created_at);

        if ($stmt->execute()) {
            echo "Avaliação enviada com sucesso!";
        } else {
            echo "Erro ao enviar avaliação: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Erro: Dados incompletos recebidos do formulário.";
    }
}
?>
