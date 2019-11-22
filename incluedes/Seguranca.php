<?php
namespace LOJA\incluedes;

class Seguranca{
  
    public static function restritoAdm(){
        if(!isset($_SESSION['usuarioid'])){
            header("location: http://127.0.0.1/carro/login/adm");
        }
    }
}