<?php
    if($_GET['id']) {
        include 'model/conexao.php';
        include 'model/cliente.class.php';
        include 'dao/cliente.dao.php';
        try {
            $DAO = new DAOCliente();
            $cliente = $DAO->buscaPorId($_GET['id']);
        }
        catch(Exception $e) {
            $msg = $e->getMessage();
        }
    }
?>