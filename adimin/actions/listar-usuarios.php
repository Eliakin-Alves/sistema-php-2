<?php
    include "model/conexao.php";
    include "dao/usuario.dao.php";
    $obj = new DAOUsuario();
    $lista = $obj->listaUsuarios();
?>