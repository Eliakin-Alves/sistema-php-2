<?php
namespace LOJA\API;
use LOJA\DAO\DAOProduto;

class ProdutoListar{

   public $lista;

   function __construct(){
        $obj = new DAOProduto();

        $this->lista = $obj->listaProduto();
   }
}
?>