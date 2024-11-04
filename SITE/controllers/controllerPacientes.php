<?php

require_once '../model/paciente.php';

class controllerPacientes {

    public function cadastrarCliente() {
        // Exibe o formulário de cadastro de pacientes
        require_once '../views/cadastrocliente.php';
    }
    public function inicio() {
        require_once '../views/homepage.php';
    }
    public function loginfalso(){
        require_once '../views/homepagecol.php';
    }
    public function salvarCadastroP() {
        // Recebe dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $nasc = $_POST['nasc'];
        $rg = $_POST['rg'];
        $sexo = $_POST['sexo'];
    
        // Cria um novo paciente
        $paciente = new Paciente();
        $paciente->nome = $nome;
        $paciente->email = $email;
        $paciente->senha = $senha;
        $paciente->nasc = $nasc;
        $paciente->cpf = $cpf;
        $paciente->rg = $rg;
        $paciente->sexo = $sexo;
    
        // Salva no banco de dados
        if ($paciente->save()) {
            // Redireciona para a página de login após cadastro bem-sucedido
            header('Location: /PROJETO-FINAL-CLINICA/SITE/public');
        } else {
            echo "Erro ao salvar seu cadastro!";
        }
    }
    

    public function consultarCadastros() {
        // Pega todos os pacientes do banco de dados
        $paciente = new Paciente();
        $pacientes = $paciente->getAll();

        // Exibe a lista de livros
        require_once '../views/consultarcadastro.php';
    }
    public function showUpdateForm($id) {
        $paciente = new Paciente();
        $pacienteInfo = $paciente->getById($id);
        include '../views/attcadastro.php'; // Inclua o arquivo do formulário de atualização
    }

    // Método para atualizar um livro
    public function updatePaciente() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Paciente();
            $paciente->id = $_POST['id'];
            $paciente->nome = $_POST['nome'];
            $paciente->email = $_POST['email'];
            $paciente->senha = $_POST['senha'];
            $paciente->cpf = $_POST['cpf'];
            $paciente->nasc = $_POST['nasc'];
            $paciente->rg = $_POST['rg'];
            $paciente->sexo = $_POST['sexo'];

            if ($paciente->update()) {
                header('Location: /PROJETO-FINAL-CLINICA/SITE/public/consultarCadastros');
            } else {
                echo "Erro ao atualizar o cadastro.";
            }
        }
    }

    // Método para excluir um livro pelo título
    public function deletePacienteId() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Paciente();
            $paciente->id = $_POST['id'];

            if ($paciente->deleteId()) {
                header('Location: /PROJETO-FINAL-CLINICA/SITE/public/consultarCadastros');
            } else {
                echo "Erro ao excluir o cadastro.";
            }
        }
    }
}

