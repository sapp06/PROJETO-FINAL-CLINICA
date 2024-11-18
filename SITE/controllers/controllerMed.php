<?php

require_once '../model/med.php';

class controllerAdm {

    public function cadastrarMed() {
        // Exibe o formulário de cadastro de meds
        require_once '../views/cadastrocol.php';
    }
    public function inicio() {
        require_once '../views/homepage.php';
    }
    public function loginfalso(){
        require_once '../views/homepagecol.php';
    }
    public function salvarCadastroM() {
        // Recebe dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $crm = $_POST['crm'];
        $nasc = $_POST['nasc'];
        $rg = $_POST['rg'];
        $sexo = $_POST['sexo'];
    
        // Cria um novo med
        $med = new Med();
        $med->nome = $nome;
        $med->email = $email;
        $med->senha = $senha;
        $med->nasc = $nasc;
        $med->cpf = $cpf;
        $med->crm = $crm;
        $med->rg = $rg;
        $med->sexo = $sexo;
    
        // Salva no banco de dados
        if ($med->save()) {
            // Redireciona para a página de login após cadastro bem-sucedido
            header('Location: /PROJETO-FINAL-CLINICA/SITE/public');
        } else {
            echo "Erro ao salvar seu cadastro!";
        }
    }
    

    public function consultarCadastrosM() {
        // Pega todos os adms no banco de dados
        $med = new Med();
        $meds = $med->getAll();

        // Exibe a lista de cadastros
        require_once '../views/consultarcadastroMed.php';
    }
    public function showUpdateForm($id) {
        $med = new Med();
        $medInfo = $med->getById($id);
        include '../views/attcadastroMed.php'; // Inclua o arquivo do formulário de atualização
    }

    // Método para atualizar um med
    public function updateMed() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $med = new Med();
            $med->id = $_POST['id'];
            $med->nome = $_POST['nome'];
            $med->email = $_POST['email'];
            $med->senha = $_POST['senha'];
            $med->cpf = $_POST['cpf'];
            $med->crm = $_POST['crm'];
            $med->nasc = $_POST['nasc'];
            $med->rg = $_POST['rg'];
            $med->sexo = $_POST['sexo'];

            if ($med->update()) {
                header('Location: /PROJETO-FINAL-CLINICA/SITE/public/consultarCadastros');
            } else {
                echo "Erro ao atualizar o cadastro.";
            }
        }
    }

    // Método para excluir um adm pelo id
    public function deleteMedId() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $med = new Med();
            $med->id = $_POST['id'];

            if ($med->deleteId()) {
                header('Location: /PROJETO-FINAL-CLINICA/SITE/public/consultarCadastros');
            } else {
                echo "Erro ao excluir o cadastro.";
            }
        }
    }
}
