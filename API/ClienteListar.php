<?php
 namespace LOJA\API;
 use LOJA\DAO\DAOCliente;

 class ClienteListar{

    public $lista;

    function __construct(){


        $obj = new DAOCliente();

        $this->lista = $obj->listaCliente();
    }
}

?>