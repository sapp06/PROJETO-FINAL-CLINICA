<?php

require_once '../model/paciente.php';

class controllerPacientes {

    public function mostrarFormulario() {
        // Exibe o formulário de cadastro de pacientes
        require_once '../views/cadastrocliente.php';
    }

    public function salvarCadastroP() {
        // Recebe dados do formulário
        $nomeCompleto = $_POST['nomeCompleto'];
        $nasc = $_POST['nasc'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];

        // Cria um novo paciente
        $paciente = new Paciente();
        $paciente->nomeCompleto = $nomeCompleto;
        $paciente->nasc = $nasc;
        $paciente->cpf = $cpf;
        $paciente->email = $email;
        $paciente->telefone = $telefone;
        $paciente->sexo = $sexo;

        // Salva no banco de dados
        if ($paciente->save()) {
            // Redireciona para a página de listagem ------ deveria redirecionar para a página de usuario e senha
            header('Location: /LIVRARIA/homepage.php');
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
}

