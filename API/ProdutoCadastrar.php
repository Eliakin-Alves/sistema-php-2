<?php
    namespace LOJA\API;
    use LOJA\Model\Produto;
    use LOJA\DAO\DAOProduto;
    use LOJA\Model\Servico;
    use LOJA\includes\Util;
        class ProdutoCadastrar {
            public $msg;
            function __construct(){
                if($_POST) {
                        try {
                            // criei um produto
                            $produto = new Produto();
                            $produto->setNome($_POST['nome']);
                            $produto->setPreco($_POST['preco']);
                            //$produto->setDepartamento($_POST['departamento']);
                            $produto->setDescricao($_POST['descricao']);
                            $produto->setImagem(Util::uploadImg());
                            // $servico = new Servico();

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
                }
            }
        

?>