<?php
    if($_GET['id']) {
        require_once 'model/conexao.php';
        require_once 'model/usuario.class.php';
        require_once 'dao/usuario.dao.php';
        try {
            $DAO = new DAOUsuario();
            $usuario = $DAO->buscaPorId($_GET['id']);
        }
        catch(Exception $e) {
            $msg = $e->getMessage();
        }
    }
?>