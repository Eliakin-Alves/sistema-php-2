<?php
    include "model/conexao.php";
    include "dao/servicos.dao.php";
    $obj = new DAOServicos();
    $lista = $obj->listaServicos();
?>