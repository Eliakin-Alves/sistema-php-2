<?php

    
namespace LOJA\API;//Local desta classe
use LOJA\DAO\DAOUsuario;

    class UsuarioVizualizar{

        public $dados;

        public function __construct(){
    

        try{
            $DAO = new DAOUsuario();
            $this->dados = $DAO->buscaPorId($_GET['id']);
    
        }catch(Exception $e){
            $this->dados = $e->getMessage();
        }
    }  
}


?>