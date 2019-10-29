<?php
    include 'model/conexao.php';
    include 'model/usuario.class.php';
    include 'dao/usuario.dao.php';
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