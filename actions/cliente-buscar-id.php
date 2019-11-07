<?php
    if($_GET['id']) {
        require_once 'model/conexao.php';
        require_once 'model/cliente.class.php';
        require_once 'dao/cliente.dao.php';
        try {
            $DAO = new DAOCliente();
            $cliente = $DAO->buscaPorId($_GET['id']);
        }
        catch(Exception $e) {
            $msg = $e->getMessage();
        }
    }
?>