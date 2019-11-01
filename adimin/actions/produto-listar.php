<?php
    require_once "model/conexao.php";
    require_once "dao/produto.dao.php";
    $obj = new DAOProduto();
    $lista = $obj->listaProdutos();
?>