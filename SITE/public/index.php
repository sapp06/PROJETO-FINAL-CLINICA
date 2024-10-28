<?php

// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/controllerPacientes.php';

// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD']; // Para diferenciar GET e POST

$controller = new controllerPacientes();

switch ($request) {
    case '/PROJETO-FINAL-CLINICA/SITE/public/':
        $controller->inicio();
        break;

    case '/PROJETO-FINAL-CLINICA/SITE/public/salvarCadastroP':
        if ($method == 'POST') {
            $controller->salvarCadastroP();
        } else {
            http_response_code(405); // Método não permitido
            echo "Método não permitido.";
        }
        break;
    case '/PROJETO-FINAL-CLINICA/SITE/public/consultarCadastros':
        $controller->consultarCadastros();
        break;
    case '/PROJETO-FINAL-CLINICA/SITE/public/cadastro':
        $controller->cadastrarCliente();
        break;
    case '/PROJETO-FINAL-CLINICA/SITE/public/administrador':
        $controller->loginfalso();
        break;
    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}
