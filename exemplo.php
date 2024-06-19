<?php
// Incluir os arquivos de classe
include_once 'db.php';
include_once 'User.php';

// Obter a conexão com o banco de dados
$database = new Database();
$db = $database->getConnection();

// Instanciar o objeto User
$user = new User($db);

// Criar um novo usuário
$user->name = "John Doe";
$user->email = "john.doe@example.com";
$user->created_at = date('Y-m-d H:i:s');

if($user->create()) {
    echo "Usuário criado com sucesso.";
} else {
    echo "Não foi possível criar o usuário.";
}

// Ler todos os usuários
$stmt = $user->read();
$num = $stmt->rowCount();

if($num > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        echo "ID: $id - Nome: $name - Email: $email\n";
    }
} else {
    echo "Nenhum usuário encontrado.";
}

// Atualizar um usuário
$user->id = 1; // ID do usuário a ser atualizado
$user->name = "Jane Doe";
$user->email = "jane.doe@example.com";

if($user->update()) {
    echo "Usuário atualizado com sucesso.";
} else {
    echo "Não foi possível atualizar o usuário.";
}

// Deletar um usuário
$user->id = 1; // ID do usuário a ser deletado

if($user->delete()) {
    echo "Usuário deletado com sucesso.";
} else {
    echo "Não foi possível deletar o usuário.";
}
?>
