<?php
    require "includes/autoload.php";
    // capturando os dados da url
    // ex.:adimin/departamento/cadastrar/listar
    // model=departamento & action=listar
    $router = $_GET['model'].$_GET['action'];
    $view = "";
    // $router = departamentolistar
    switch($router){
        // Serviços
        case 'servicoscadastrar':
            $obj = new \LOJA\API\ServicosCadastrar;
            $msg = $obj->msg;
            $view = "form-servicos.php";
            break;

        case 'servicoslistar':
            $obj = new \LOJA\API\ServicosListar;
            $lista = $obj->lista;
            $view = "lista-servicos.php";
            break;

        case 'servicosvisualizar':
                $obj = new \LOJA\API\ServicosVisualizar;
                $servico = $obj->dados;
                $view = "visualizar-servicos.php";
                break;
        // Clientes
        case 'clientecadastrar':
            $obj = new \LOJA\API\ClienteCadastrar;
            $msg = $obj->msg;
            $view = "form-cliente.php";
            break;
            case 'clientelistar':
                $obj = new \LOJA\API\ClienteListar;
                $lista = $obj->lista;
                $view = "lista-cliente.php";
                break;
            case 'clientevisualizar':
                $obj = new \LOJA\API\ClienteVisualizar;
                $cliente = $obj->dados;
                $view = "visualiza-cliente-id.php";
                break;

        default:
            echo "default";
        break; 
    }

    include "view/{$view}";
?>