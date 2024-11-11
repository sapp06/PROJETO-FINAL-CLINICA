<?php

require_once '../model/adm.php';

class controllerAdm {

    public function cadastrarAdm() {
        // Exibe o formulário de cadastro de adms
        require_once '../views/cadastrocol.php';
    }
    public function inicio() {
        require_once '../views/homepage.php';
    }
    public function loginfalso(){
        require_once '../views/homepagecol.php';
    }
    public function salvarCadastroA() {
        // Recebe dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $nasc = $_POST['nasc'];
        $rg = $_POST['rg'];
        $sexo = $_POST['sexo'];
    
        // Cria um novo adm
        $adm = new Adm();
        $adm->nome = $nome;
        $adm->email = $email;
        $adm->senha = $senha;
        $adm->nasc = $nasc;
        $adm->cpf = $cpf;
        $adm->rg = $rg;
        $adm->sexo = $sexo;
    
        // Salva no banco de dados
        if ($adm->save()) {
            // Redireciona para a página de login após cadastro bem-sucedido
            header('Location: /PROJETO-FINAL-CLINICA/SITE/public');
        } else {
            echo "Erro ao salvar seu cadastro!";
        }
    }
    

    public function consultarCadastros() {
        // Pega todos os adms no banco de dados
        $adm = new Adm();
        $adms = $adm->getAll();

        // Exibe a lista de cadastros
        require_once '../views/consultarcadastro.php';
    }
    public function showUpdateForm($id) {
        $adm = new Adm();
        $admInfo = $adm->getById($id);
        include '../views/attcadastro.php'; // Inclua o arquivo do formulário de atualização
    }

    // Método para atualizar um adm
    public function updateAdm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $adm = new Adm();
            $adm->id = $_POST['id'];
            $adm->nome = $_POST['nome'];
            $adm->email = $_POST['email'];
            $adm->senha = $_POST['senha'];
            $adm->cpf = $_POST['cpf'];
            $adm->nasc = $_POST['nasc'];
            $adm->rg = $_POST['rg'];
            $adm->sexo = $_POST['sexo'];

            if ($adm->update()) {
                header('Location: /PROJETO-FINAL-CLINICA/SITE/public/consultarCadastros');
            } else {
                echo "Erro ao atualizar o cadastro.";
            }
        }
    }

    // Método para excluir um adm pelo id
    public function deleteAdmId() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $adm = new Adm();
            $adm->id = $_POST['id'];

            if ($adm->deleteId()) {
                header('Location: /PROJETO-FINAL-CLINICA/SITE/public/consultarCadastros');
            } else {
                echo "Erro ao excluir o cadastro.";
            }
        }
    }
}
