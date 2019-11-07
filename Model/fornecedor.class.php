<?php
    class Fornecedor {
        private $id;
        private $cidade;
        private $estado;
        private $cnpj;
        function __construct() {

        }
        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getCidade(){
            return $this->cidade;
        }
    
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
    
        public function getEstado(){
            return $this->estado;
        }
    
        public function setEstado($estado){
            $this->estado = $estado;
        }
    
        public function getCnpj(){
            return $this->cnpj;
        }
    
        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }
    }
?>