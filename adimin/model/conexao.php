<?php
class Conexao{
    public static $instance;
    private function __construct(){
        
    }
    public static function getInstance(){
        try {
            $conexao = new PDO("mysql:host=localhost; dbname=loja", "root", "");
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("set names utf8");
            
            return $conexao;
        } catch (PDOException $erro) {
            
            return null;
        }
    }
}
?>