<?php
    include '../model/conexao.php';
    include '../model/produto.class.php';
    include '../model/servico.class.php';
    include '../dao/produto.dao.php';
        try {
            // criei um produto
            $produto = new Produto();
            $produto->setNome('Computador');
            $produto->setPreco('1200');
            $produto->setDescricao('Intel Quad Core');
            $servico = new Servico();

            // crio um objeto servico
            $servico->setId(20);
            $produto->setServico($servico);

            // definindo o servico para o produto
            $DAO = new DAOProduto();
            $msg = $DAO->cadastrar($produto);
            echo $msg;
        }
        catch(Exception $e) {
            $msg = $e->getMessage();
            echo $msg;
        }
?>