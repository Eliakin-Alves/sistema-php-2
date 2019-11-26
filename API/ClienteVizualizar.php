<?php

namespace LOJA\API;//Local desta classe
use LOJA\DAO\DAOCliente;

    class ClienteVizualizar{

        public $dados;

        public function __construct(){
    

        try{
            $DAO = new DAOCliente();
            $this->dados = $DAO->buscaPorId($_GET['id']);
            
        }catch(\Exception $e){
            $this->dados = $e->getMessage();
        }
    }  
}

?>