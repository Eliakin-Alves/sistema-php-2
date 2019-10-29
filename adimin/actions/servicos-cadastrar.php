<?php
    include 'model/conexao.php';
    include 'model/servico.class.php';
    include 'dao/servicos.dao.php';
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