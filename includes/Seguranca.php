<?php
namespace LOJA\includes;

class Seguranca{
  
    public static function restritoAdm(){
        if(!isset($_SESSION['usuarioid'])){
            header("location: http://127.0.0.1/sistema-php-2/login/adm");
        }
    }
}