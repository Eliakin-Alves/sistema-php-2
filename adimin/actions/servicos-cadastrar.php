<?php
    require_once 'model/conexao.php';
    require_once 'model/servico.class.php';
    require_once 'dao/servicos.dao.php';
    if($_POST) {
        try {
            $obj = new Servico();
            $obj->setNome($_POST['nome']);
            $DAO = new DAOServicos();
            $msg = $DAO->cadastrar($obj);
        }
        catch(Exception $e) {
            $msg = $e->getMenssagem();
        }
    }
?>