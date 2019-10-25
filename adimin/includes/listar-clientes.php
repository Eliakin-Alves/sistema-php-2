<?php
    include "model/conexao.php";
    include "dao/cliente.dao.php";
    $obj = new DAOCliente();
    $lista = $obj->listaClientes();
?>