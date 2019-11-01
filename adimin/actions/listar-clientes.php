<?php
    require_once "model/conexao.php";
    require_once "dao/cliente.dao.php";
    $obj = new DAOCliente();
    $lista = $obj->listaClientes();
?>