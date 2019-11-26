<?php
    namespace LOJA\API;

    class UsuarioLogoff{

        function __construct(){
            unset($_SESSION['usuarioid']); //SESSION é PARA DESTRUI A INFORMAÇÃo para deslogar
            unset($_SESSION['usuarionome']);
            unset($_SESSION);
            header("location: http://localhost/carro/login/adm");

        }
    }
?>