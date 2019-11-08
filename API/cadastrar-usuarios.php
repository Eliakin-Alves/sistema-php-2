<?php
    require_once 'model/conexao.php';
    require_once 'model/usuario.class.php';
    require_once 'dao/usuario.dao.php';
    if($_POST) {
        try {
            $obj = new Usuario();
            $obj->setNome($_POST['nome']);
            $obj->setSenha($_POST['senha']);
            $DAO = new DAOUsuario();
            $msg = $DAO->cadastrar($obj);
        }
        catch(Exception $e) {
            $msg = $e->getMessage();
        }
    }
?>