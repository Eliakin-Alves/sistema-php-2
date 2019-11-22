<?php

namespace LOJA\API;
use LOJA\Model\Fornecedor;
use LOJA\DAO\DAOFornecedor;

class FornecedorCadastrar{
    public $msg;
    function __construct(){
    if($_POST){

        try{
            $obj = new Fornecedor();
            $obj->setNome($_POST['nome']);
            $obj->setCidade($_POST['cidade']);
            $obj->setEstado($_POST['estado']);
            $obj->setCnpj($_POST['cnpj']);
           

            $DAO = new DAOFornecedor();
            $this->msg = $DAO->cadastrar($obj);

        }catch(Exception $e){
            $this->msg = $e->getMessage();
        }
    }
}
}

?>