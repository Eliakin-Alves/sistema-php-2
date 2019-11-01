<?php
    require_once "model/conexao.php";
    require_once "dao/usuario.dao.php";
    $obj = new DAOUsuario();
    $lista = $obj->listaUsuarios();
?>