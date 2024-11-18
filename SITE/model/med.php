<?php

require_once '../config/database.php';

class Med {
    private $conn;
    private $table_name = "meds";

    public $id;
    public $nome;
    public $email;
    public $senha;
    public $nasc;
    public $cpf;
    public $crm;
    public $rg;
    public $sexo;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (nome, email, senha, nasc, cpf, crm, rg, sexo) VALUES (:nome, :email, :senha, :nasc, :cpf, :crm, :rg, :sexo)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':nasc', $this->nasc);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':crm', $this->crm);
        $stmt->bindParam(':rg', $this->rg);
        $stmt->bindParam(':sexo', $this->sexo);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
        // Método para buscar um adm pelo ID
        public function getById($id) {
            $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    
        // Método para atualizar um adm
        public function update() {
            $query = "UPDATE " . $this->table_name . " SET nome = :nome, email = :email, senha = :senha, nasc = :nasc, cpf = :cpf, crm = :crm, rg = :rg, sexo = :sexo WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':senha', $this->senha);
            $stmt->bindParam(':nasc', $this->nasc);
            $stmt->bindParam(':cpf', $this->cpf);
            $stmt->bindParam(':crm', $this->crm);
            $stmt->bindParam(':rg', $this->rg);
            $stmt->bindParam(':sexo', $this->sexo);
    
            return $stmt->execute();
        }
    
        // Método para excluir um adm pelo nome
        public function deleteId() {
            $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $this->id);
    
            return $stmt->execute();
        }
}