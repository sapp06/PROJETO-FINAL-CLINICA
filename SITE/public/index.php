<?php

// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/controllerPacientes.php';
require_once '../controllers/controllerAdm.php';


// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD']; // Para diferenciar GET e POST

$controller = new controllerPacientes();
$controller2 = new controllerAdm();

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
    case '/PROJETO-FINAL-CLINICA/SITE/public/deleteCadastro':
        if ($method == 'POST') {
            $controller->deletePacienteId();
        }
        break;

    case (preg_match('/\/PROJETO-FINAL-CLINICA\/SITE\/public\/updateCadastro\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        $controller->showUpdateForm($id);
        break;

    case '/PROJETO-FINAL-CLINICA/SITE/public/updateCadastro':
        if ($method == 'POST') {
            $controller->updatePaciente();
        }
        break;
    case '/PROJETO-FINAL-CLINICA/SITE/public/':
        $controller2->inicio();
        break;

    case '/PROJETO-FINAL-CLINICA/SITE/public/salvarCadastroA':
        if ($method == 'POST') {
            $controller2->salvarCadastroA();
        } else {
            http_response_code(405); // Método não permitido
            echo "Método não permitido.";
        }
        break;
    case '/PROJETO-FINAL-CLINICA/SITE/public/consultarCadastrosA':
        $controller2->consultarCadastrosA();
        break;
    case '/PROJETO-FINAL-CLINICA/SITE/public/cadastroadm':
        $controller2->cadastrarAdm();
        break;
    case '/PROJETO-FINAL-CLINICA/SITE/public/paciente':
        $controller2->loginfalso();
        break;
    case '/PROJETO-FINAL-CLINICA/SITE/public/deleteCadastroAdm':
        if ($method == 'POST') {
            $controller2->deleteAdmId();
        }
        break;
    case (preg_match('/\/PROJETO-FINAL-CLINICA\/SITE\/public\/updateCadastroAdm\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        $controller2->showUpdateForm($id);
        break;

    case '/PROJETO-FINAL-CLINICA/SITE/public/updateCadastroA':
        if ($method == 'POST') {
            $controller2->updateAdm();
        }
        break;

    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}