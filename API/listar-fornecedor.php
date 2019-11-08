<?php
    require_once "model/conexao.php";
    require_once "dao/fornecedor.dao.php";
    $obj = new DAOFornecedores();
    $lista = $obj->listaFornecedores();
?>