<?php
    require_once "model/conexao.php";
    require_once "dao/servicos.dao.php";
    $obj = new DAOServicos();
    $lista = $obj->listaServicos();
?>