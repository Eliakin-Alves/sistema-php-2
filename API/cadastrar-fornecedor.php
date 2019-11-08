<?php
    require_once 'model/conexao.php';
    require_once 'model/fornecedor.class.php';
    require_once 'dao/fornecedor.dao.php';
    if($_POST) {
        try {
            $obj = new Fornecedor();
            $obj->setCidade($_POST['cidade']);
            $obj->setEstado($_POST['estado']);
            $obj->setCnpj($_POST['cnpj']);
            $DAO = new DAOFornecedor();
            $msg = $DAO->cadastrar($obj);
        }
        catch(Exception $e) {
            $msg = $e->getMessage();
        }
    }
?>