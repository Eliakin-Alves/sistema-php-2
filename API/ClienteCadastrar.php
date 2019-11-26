<?php

namespace LOJA\API;
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;

class ClienteCadastrar{
    public $msg;
    function __construct(){

    if($_POST){

        try{
            $obj = new Cliente();
            $obj->setNome($_POST['nome']);
            $obj->setCpf($_POST['cpf']);
            $obj->setCep($_POST['cep']);
            $obj->setEndereco($_POST['endereco']);
            $obj->setTelefone($_POST['telefone']);
        
            $obj->setEmail($_POST['email']);
            $obj->setSenha($_POST['senha']);

            $DAO = new DAOCliente();
            $this->msg = $DAO->cadastrar($obj);

        }catch(Exception $e){
            $this->msg = $e->getMenssagem();
        }
     }
    }
}

?>
