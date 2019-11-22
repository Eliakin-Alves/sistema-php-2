<?php
    namespace LOJA\API;

    class clienteLogoff{

        function __construct(){
            unset($_SESSION['clienteid']); //SESSION é PARA DESTRUI A INFORMAÇÃo para deslogar
            unset($_SESSION['clientenome']);
            unset($_SESSION);
            header("location: http://localhost/carro/login/cliente");

        }
    }
?>