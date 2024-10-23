<?php

require_once '../config/database.php';

class Paciente {
    private $conn;
    private $table_name = "pacientes";

    public $nomeCompleto;
    public $nasc;
    public $cpf;
    public $email;
    public $telefone;
    public $sexo;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (nomeCompleto, nasc, cpf, email, telefone, sexo) VALUES (:nomeCompleto, :nasc, :cpf, :email, :telefone, :sexo)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nomeCompleto', $this->nomeCompleto);
        $stmt->bindParam(':nasc', $this->nasc);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone', $this->telefone);
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