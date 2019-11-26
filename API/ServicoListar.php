<?php
     namespace LOJA\API;
     use LOJA\DAO\DAOServico;

     class ServicoListar{

        public $lista;

        function __construct(){

                $obj = new DAOServico();
                $this->lista = $obj->listaServico();
 //class sempre vem depois do new 
        }
}
?>