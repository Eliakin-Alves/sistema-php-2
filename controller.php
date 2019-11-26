<?php 
     
     session_start();

   //capturando os dados da url
    //ex.: admin/departamento/cadastrar/listar
    //model=departamento & action-listar
    require "incluedes/autoload.php";
    
    $router = $_GET['model'].$_GET['action'];
    $view = "";

    $url = "http://localhost/carro";

    switch($router){
    //router = departamentolistar

            // PARTE DO SERVIÇO <>
        case 'servicocadastrar':
            \LOJA\incluedes\Seguranca::restritoAdm();

            $obj = new \LOJA\API\ServicoCadastrar;
            $msg = $obj->msg;
            $view = "form-servico.php";
            break;

        case 'servicolistar':

            $obj = new \LOJA\API\ServicoListar;
            $lista = $obj->lista;
            $view = "lista-servico.php";
            break;

        case 'servicovizualizar':
              
            \LOJA\incluedes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\ServicoVizualizar;
            $servico = $obj->dados;
            $view = "vizualizar-servico-id.php";
            break;
            //^^ PARTE DO SERVIÇO  ^^ 
           
            // PARTE DO CLIENTE <>
        case 'logincliente':
            $obj = new \LOJA\API\ClienteLogar;
            $msg = $obj->msg;
            $view = "form-cliente-login.php";
            break;

        case 'clientelistar':
            \LOJA\incluedes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\ClienteListar;
            $lista = $obj->lista;
            $view = "lista-cliente.php";
            break;
            
        case 'clientecadastrar':
     
            $obj = new \LOJA\API\ClienteCadastrar;
            $msg = $obj->msg;
            $view = "form-cliente.php";
            break;

        case 'clientevizualizar':
            \LOJA\incluedes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\ClienteVizualizar;
            $cliente = $obj->dados;
            $view = "vizualizar-cliente-id.php";
            break;
        case 'painelcliente':
           
            $obj = new \LOJA\API\ClienteLogar;
                
            $view = "painel-cliente.php";
            break;
    
        case 'painellogoff':
                $obj = new \LOJA\API\ClienteLogoff;
                    
                $view = "form-cliente-login.php";
                break;

            // PARTE DO CLIENTE ^^ 
        
          // PARTE DO PRODUTO <> 
        case 'produtocadastrar':
            \LOJA\incluedes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\ProdutoCadastrar;
            $msg = $obj->msg;

            $obj2 = new \LOJA\API\ServicoListar;
            $lista = $obj2->lista;

            $view = "form-produto.php";
            break;

            case 'produtolistar':
                $obj = new \LOJA\API\ProdutoListar;
                $lista = $obj->lista;
                $view = "lista-produto.php";
                break;
            
            // PARTE DO PRODUTO  ^^

       

           
            // PARTE DO FORNECEDOR <>

        case 'fornecedorcadastrar':
            \LOJA\incluedes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\FornecedorCadastrar;
            $msg = $obj->msg;
            $view = "form-fornecedor.php";
            break;

        case 'fornecedorlistar':
            \LOJA\incluedes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\FornecedorListar;
            $lista = $obj->lista;
            $view = "lista-fornecedor.php";
            break;
            // PARTE DO FORNECEDOR ^^

            // PARTE DOS ADMIN <>
        case 'usuariolistar':
              \LOJA\incluedes\Seguranca::restritoAdm();
             $obj = new \LOJA\API\UsuarioListar;
             $lista = $obj->lista;
             $view = "lista-usuario.php";
             break;
    
        case 'usuariovizualizar':
            \LOJA\incluedes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\UsuarioVizualizar;
            $usuario = $obj->dados;
            $view = "vizualiza-usuario-id.php";
            break;


        case 'usuariocadastrar':
            \LOJA\incluedes\Seguranca::restritoAdm();
             $obj = new \LOJA\API\UsuarioCadastrar;
             $msg = $obj->msg;
           
             $view = "form-usuario.php";
             break;

        case 'loginadm':
            $obj = new \LOJA\API\UsuarioLogar;
            $msg = $obj->msg;
            $view = "form-adm.php";
            break;
            
        case 'paineladm':
            \LOJA\incluedes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\UsuarioLogar;
            
            $view = "painel-adm.php";
            break;

        case 'painellogoff':
                $obj = new \LOJA\API\UsuarioLogoff;
                
                $view = "form-adm.php";
                break;
            
            // PARTE DOS ADMIN ^^

       
        default:
            $view = "form-cliente.php";
        break; 
    }

    
    include "view/{$view}";

?>

