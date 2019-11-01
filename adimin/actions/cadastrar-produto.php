<?php
    if($_POST) {
        require_once 'model/conexao.php';
        require_once 'model/produto.class.php';
        require_once 'model/servico.class.php';
        require_once 'dao/produto.dao.php';
            try {
                // criei um produto
                $produto = new Produto();
                $produto->setNome($_POST['nome']);
                $produto->setPreco($_POST['preco']);
                //$produto->setDepartamento($_POST['departamento']);
                $produto->setDescricao($_POST['descricao']);
                $servico = new Servico();

                // crio um objeto servico
                $servico = new Servico();
                $servico->setId($_POST['servico']);

                $produto->setServico($servico);

                // definindo o servico para o produto
                $DAO = new DAOProduto();
                $msg = $DAO->cadastrar($produto);
            }
            catch(Exception $e) {
                $msg = $e->getMessage();
            }
        }
?>