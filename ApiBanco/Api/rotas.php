<?php
use API\Controller\{
    CorrentistaController,
    ContaController
};

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($parse_uri) {

    // http://localhost:8000/correntista/save --
    case "/correntista/save":
        CorrentistaController::save();
    break;

    // http://localhost:8000/conta/extrato --
    case "/conta/extrato":
        ContaController::extrato();
    break;

    // http://localhost:8000/conta/pix/enviar --
    case "/conta/pix/enviar":
        ContaController::enviarPix();
    break;

    // http://localhost:8000/conta/pix/receber --
    case "/conta/pix/receber":
        ContaController::receberPix();
    break;

    // http://localhost:8000/correntista/entrar --
    case "/correntista/entrar":
        CorrentistaController::auth();
    break;

    default:
        header("Location: /");
    break;
}