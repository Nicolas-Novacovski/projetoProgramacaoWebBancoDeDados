<?php
 class User {
    private $conn;
    private $table_name = "usuarios";

    private $table_produto = "produtos";

    public $login;
    public $senha;
    public $created_at;
    public $name;
    public $last_name;
    public $phone;
    public $adress;

    public $nome_produto;
    public $qntd_produto;
    public $valor_produto;

  
    public function __construct($db) {
        $this->conn = $db;
    }

    public function setSenha($senha) {
        $this->senha = md5($senha);
    }


    public function getSenha() {
        return $this->senha;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET
                  login=:login, senha=:senha, created_at=:created_at,
                  name=:name, last_name=:last_name, phone=:phone, adress=:adress";

        $stmt = $this->conn->prepare($query);

        // bind values
        $stmt->bindParam(":login", $this->login);
        $stmt->bindParam(":senha", $this->senha);
        $stmt->bindParam(":created_at", $this->created_at);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":last_name", $this->last_name);
        $stmt->bindParam(":phone", $this->phone);
        $stmt->bindParam(":adress", $this->adress);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function createProduct() {
        $query = "INSERT INTO " . $this->table_produto . " SET
        nome_produto=:nome_produto, qntd_produto=:qntd_produto, valor_produto=:valor_produto,
        created_at=:created_at";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome_produto", $this->nome_produto);
        $stmt->bindParam(":qntd_produto", $this->qntd_produto);
        $stmt->bindParam(":valor_produto", $this->valor_produto);
        $stmt->bindParam(":created_at", $this->created_at);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

  

    public function checkLogin() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE login = :login AND senha = :senha LIMIT 1";
        $stmt = $this->conn->prepare($query);

        // bind values
        $stmt->bindParam(":login", $this->login);
        $stmt->bindParam(":senha", $this->senha);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public function checkloginAdmin() {
        // Verificar se o login é "login@login" e a senha é "admin"
        if ($this->login == "admin@admin" && $this->senha == md5("admin")) {
            // Redirecionar para a página desejada (exemplo: indexAdmin.php)
      

            return true;
        } else {
            // Retornar falso para indicar que não é admin
            return false;
        }
    }
    
    
}
?>
