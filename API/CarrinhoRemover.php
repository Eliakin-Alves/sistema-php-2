<?php
    namespace LOJA\API;
    use LOJA\DAO\DAOProduto;
    use LOJA\Model\Carrinho;
    use LOJA\Model\Item;
    use LOJA\Model\Produto;

    class CarrinhoRemover {
        function __construct() {
            $carrinho = new Carrinho; // inicia o carrinho
            $id = $_GET['id']; // pega o id do carrinho a remover

            // se existir carrinho criado
            if(isset($_SESSION['carrinho'])) { // verifica se existe carrinho na sessão
                $carrinho = $_SESSION['carinho']; // pega o carrinho

            // verifica se o produto ja existe no carrinho
            foreach($carrinho->getLista() as $item) { // verifica os itens do carrinho
                if($item->getProduto()->getId()===$id) { // se o produto existe no carrinho

                    $carrinho->removeItem($id); // excluir carrinho
                    $_SESSION['carrinho'] = $carrinho; // atualiza o carrinho na sessão
                };
            }
            else {
                header("location: http://127.0.0.1/sistema-php-2/home");
            }
            }
        }
    }
?>