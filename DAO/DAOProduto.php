<?php
    namespace LOJA\DAO;
    use LOJA\Model\Conexao;
    use LOJA\Model\Produto;
    class DAOProduto {
        public function cadastrar(Produto $produto) {
            $sql = "INSERT INTO produto
                VALUES (default, :nome, :preco, :descricao, :imagem, :servico)";
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $produto->getNome());
            $con->bindValue(":preco", $produto->getPreco());
            $con->bindValue(":descricao", $produto->getDescricao());
            $con->bindValue(":imagem", $produto->getImagem());
            // $produto->getServico() um objeto da class servico
            // entao $produto->getServico()->getId() retorna o id do servico
            $con->bindValue(":servico", $produto->getServico()->getId());
            $con->execute();
            return "Cadastrado com sucesso";
        }
        public function listaProdutos() {
            $sql = "SELECT
            produto.nome,
            produto.preco,
            produto.descricao,
            produto.imagem,
            produto.pk_produto as 'id',
            servicos.nome as 'servicos'
            
            from produto
            INNER JOIN servicos
            ON produto.fk_servico_produto = servicos.pk_departamento";
            $con = Conexao::getInstance()->prepare($sql);
            $con->execute();
            $lista = array();
            while($produto = $con->fetch(\PDO::FETCH_ASSOC)) {
                $lista[] = $produto;
            }
            return $lista;
        }
    }
?>