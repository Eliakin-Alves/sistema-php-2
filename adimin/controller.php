<?php 
    // capturando os dados da url
    // ex.:adimin/departamento/cadastrar/listar
    // model=departamento & action=listar
    $router = $_GET['model'].$_GET['action'];
    $view = "";
    // $router = departamentolistar
    switch($router){

        case 'servicoscadastrar':
            include "actions/servicos-cadastrar.php";
            $view = "form-servicos.php";
            break;

        case 'servicoslistar':
            include "actions/listar-servicos.php";
            $view = "lista-servicos.php";
            break;

        // adimin/cliente/listar
        case 'clientelistar';
            include "actions/listar-clientes.php";
            $view = "lista-cliente.php";
            break;
        // adimin/cliente/visualizar/:id
        case 'clientevisualizar';
            include "actions/cliente-buscar-id.php";
            $view = "visualiza-cliente-id.php";
            break;
        // adimin/produto/cadastrar
        case 'produtocadastrar';
            include "actions/cadastrar-produto.php";
            include "actions/listar-servicos.php";
            $view = "form-produto.php";
            break;

        case 'usuariocadastrar';
            include "actions/cadastrar-usuarios.php";
            $view = "form-usuario.php";
            break;

        case 'usuariocadastrar';// mesmo do de cima
            include "actions/listar-usuarios.php";
            $view = "lista-usuario.php";
            break;

        case 'usuariovisualizar';//
            include "actions/usuario-buscar-id.php";
            $view = "visualiza-usuario.id.php";
            break;

        // 0. verificar se existe a classe (produto.class.php)
        // 1. criar a view/lista-produto.php 
        // 2. criar a actions/produto-listar.php 
        // 3. verificar se em produto.dao possui a função de listar
        case 'produtolistar';
            include "actions/produto-listar.php";
            $view = "lista-produto.php";
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