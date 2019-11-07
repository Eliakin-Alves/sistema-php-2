<?php
    require "includes/autoload.php";
    // capturando os dados da url
    // ex.:adimin/departamento/cadastrar/listar
    // model=departamento & action=listar
    $router = $_GET['model'].$_GET['action'];
    $view = "";
    // $router = departamentolistar
    switch($router){

        case 'servicoscadastrar':
            new \LOJA\Actions\ServicosCadastrar;
            $view = "form-servicos.php";
            break;

        case 'servicoslistar':
            include "actions/listar-servicos.php";
            $view = "lista-servicos.php";
            break;

        default:
            echo "default";
        break; 
    }

    include "view/header.php";
    include "view/{$view}";
    include "view/mensagem.php";
    include "view/footer.php";
?>