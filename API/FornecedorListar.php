<?php
 namespace LOJA\API;
 use LOJA\DAO\DAOFornecedor;
 
 class FornecedorListar{
 
    public $lista;
 
    function __construct(){
        $obj = new DAOFornecedor();

        $this->lista = $obj->listaFornecedor();
    }
}
?>