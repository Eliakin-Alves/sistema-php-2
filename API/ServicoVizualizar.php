<?php 
namespace LOJA\API;//Local desta classe
use LOJA\DAO\DAOServico;

    class ServicoVizualizar{

        public $dados;
        public function __construct(){
            try{
                $DAO = new DAOServico();
                $this->dados = $DAO->buscaPorId($_GET['id']);
            
            }catch(Exception $e){
                $this->dados = $e->getMessage();
            }
        }
    }
?>