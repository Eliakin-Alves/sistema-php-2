<?php
    namespace LOJA\API;

    class UsuarioLogoff {
        function __construct() {
            unset($_SESSION['usuarioid']);
            unset($_SESSION['usuarionome']);
            unset($_SESSION);
            header("location: http://127.0.0.1/sistema-php-2/login/adm");
        }
    }
?>