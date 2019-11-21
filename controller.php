<?php 
    session_start();
    require "includes/autoload.php";
    @$router = $_GET['model'].$_GET['action'];
    
    $view = "";

    // config
    $url = "http://localhost/lojatrio";

    switch($router){

        case 'servicoscadastrar':
            
            $obj = new \LOJA\API\ServicosCadastrar;
            $msg = $obj->msg;
            $view = "form-servicos.php";
            break;

        case 'servicoslistar':
            \LOJA\includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\ServicosListar;
            $lista = $obj->lista;
            $view = "lista-servicos.php";
            break;

        case 'servicosvisualizar':
            $obj = new \LOJA\API\ServicosVisualizar;
            $departamento = $obj->dados;
            $view = "visualizar-servicos.php";
            break;


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
            $view = "visualiza-cliente.php";
            break;
            // 
        case 'produtolistar':
            $obj = new \LOJA\API\ProdutoListar;
            $lista = $obj->lista;
            $view = "lista-produto.php";
            break;

        case 'produtocadastrar':
            
            $obj = new \LOJA\API\ProdutoCadastrar;
            $msg = $obj->msg;

            $obj2 = new \LOJA\API\ServicosListar;                ;
            $lista = $obj2->lista;

            $view = "form-produto.php";
            break;

        case 'loginadm':
            $obj = new \LOJA\API\UsuarioLogar;
            $msg = $obj->msg;
            $view = "form-login-adm.php";
        break;

        case 'paineladm':
            $view = "painel-adm.php";
        break;

        case 'painellogoff':
            $obj = new \LOJA\API\UsuarioLogoff;
            $view = "form-login-adm.php";
        break;

        case 'carrinho':
            // $obj = new \LOJA\API\UsuarioLogoff;
            $view = "cart.php";
        break;

        case 'home':
            $view = "home.php";
            break;

        default:
            echo "default";
        break;
    }

    include "view/{$view}";

?>

