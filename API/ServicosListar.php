<?php
    namespace LOJA\API;
    use LOJA\DAO\DAOServicos;
    class ServicosListar {
        public $lista;
        function __construct() {
            $obj = new DAOServicos();
            $this->lista = $obj->listaServicos();//////////////////////////////////////////
        }
    }
?>