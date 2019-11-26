<?php
    namespace LOJA\API;
    use LOJA\DAO\DAOProduto;
    use LOJA\Model\Carrinho;
    use LOJA\Model\Item;
    use LOJA\Model\Produto;

    class CarrinhoVisualizar {
        function __construct() {
            $carrinho;
            $id = $_GET['id'];
            $add = true; // true->adicione ao carrinho // false-> ja existe no carrinho, nao adicionar

            // se existir carrinho criado
            if(isset($_SESSION['carrinho'])) {
                $carrinho = $_SESSION['carinho']; // pega o carrinho

            // verifica se o produto ja existe no carrinho
            foreach($carrinho->getItems() as $item) {
                if($item->getProduto()->getId()===$id) { // verificação feita pelo id do produto
                    $add = false; // produto encontrado, nao adicione
                };
            }
            else {
                // carrinho não existe na session, entao crie
                $carrinho = new Carrinho();
            }
            // produto nao consta no carrinho, entao adiciones
            if ($add===true) {
                $carrinho->addItem($id); // adicionando produto
                $_SESSION['carrinho'] = $carrinho; // coloca o carrinho na session com o produto adicionado
            }
            }
        }
    }
?>