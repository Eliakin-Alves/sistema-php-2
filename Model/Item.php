<?php
    namespace LOJA\Model;
    use LOJA\Model\Produto;

    class Item {
        private $id;
        private $produto;
        private $quantidade;
        public function __construct() {

        }
        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getProduto(){
            return $this->produto;
        }
    
        public function setProduto($produto){
            $this->produto = $produto;
        }
    
        public function getQuantidade(){
            return $this->quantidade;
        }
    
        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }
    }
?>