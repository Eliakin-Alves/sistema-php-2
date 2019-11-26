<?php

namespace LOJA\DAO;
use LOJA\Model\Conexao;
use LOJA\Model\Cliente;

class DAOCliente{
    public function cadastrar(Cliente $cliente){
        $sql = "INSERT INTO cliente
        VALUES (default, :nome, :cpf, :cep, :endereco, :telefone, :email, :senha)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $cliente->getNome());
        $con->bindValue(":cpf", $cliente->getCpf());
        $con->bindValue(":cep", $cliente->getCep());
        $con->bindValue(":endereco", $cliente->getEndereco());
        $con->bindValue(":telefone", $cliente->getTelefone());
        $con->bindValue(":email", $cliente->getEmail());
        $con->bindValue(":senha", $cliente->getSenha());
        $con->execute();
        return "Cadastrado com sucesso";

    }
    public function buscoPorNomeSenha(Cliente $cliente){
        $sql = "SELECT pk_cliente as id,nome 
        FROM cliente WHERE nome = :nome AND 
        senha = :senha";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $cliente->getNome());
        $con->bindValue(":senha", $cliente->getSenha());
        $con->execute();
        
      
        $cliente = new Cliente();
        $cliente = $con->fetch(\PDO::FETCH_ASSOC);
        return $cliente;
       
       

    }
    public function listaCliente(){
        $sql = "SELECT * FROM cliente";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($cliente = $con->fetch(\PDO::FETCH_ASSOC)){
            $lista[] = $cliente;
        }
        return $lista;
    }

    public function buscaPorId($id){

        $sql = "SELECT * FROM cliente WHERE pk_cliente = :id";
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":id", $id);
        
        $con->execute();

        $cliente = new Cliente();

        $cliente = $con->fetch(\PDO::FETCH_ASSOC);
        //print_r($cliente);//testa saida 
        return $cliente;

    }
  

    }



?>
