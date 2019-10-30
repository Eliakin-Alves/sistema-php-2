<?php
    include 'adimin/model/conexao.php';
    include 'adimin/model/cliente.class.php';
    include 'adimin/dao/cliente.dao.php';
    if($_POST) {
        try {
            $obj = new Cliente();
            $obj->setNome($_POST['nome']);
            $obj->setCpf($_POST['cpf']);
            $obj->setEndereco($_POST['endereco']);
            $obj->setCep($_POST['cep']);
            $obj->setTelefone($_POST['telefone']);
            $obj->setEmail($_POST['email']);
            $DAO = new DAOCliente();
            $msg = $DAO->cadastrar($obj);
        }
        catch(Exception $e) {
            $msg = $e->getMenssagem();
        }
    }
?>