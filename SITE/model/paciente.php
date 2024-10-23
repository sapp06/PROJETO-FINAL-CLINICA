<?php

require_once '../config/database.php';

class Paciente {
    private $conn;
    private $table_name = "pacientes";

    public $nome;
    public $email;
    public $senha;
    public $nasc;
    public $cpf;
    public $rg;
    public $sexo;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (nome, email, senha, nasc, cpf, rg, sexo) VALUES (:nome, :email, :senha, :nasc, :cpf, :rg, :sexo)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':nasc', $this->nasc);
        $stmt->bindParam(':cpf', $this->cpf);
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
}