<?php
    include 'adimin/model/conexao.php';
    include 'adimin/model/cliente.class.php';
    include 'adimin/model/cliente.dao.php';
    if($_POST) {
        try {
            $obj = new Servicos();
            $obj->setNome($_POST['nome']);
            $obj->setCpf($_POST['cpf']);
            $obj->setEndereco($_POST['endereco']);
            $obj->setCep($_POST['cep']);
            $obj->setTelefone($_POST['telefone']);
            $obj->setEmail($_POST['email']);
            $DAO = new DAOCliente();
            $DAO->cadastrar($obj);
        }
        catch(Exception $e) {
            echo $e->getMenssagem();
        }
    }
?>