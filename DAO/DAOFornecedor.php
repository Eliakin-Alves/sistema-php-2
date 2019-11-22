<?php
namespace LOJA\DAO;
use LOJA\Model\Conexao;
use LOJA\Model\Fornecedor;
class DAOFornecedor{
    public function cadastrar(Fornecedor $fornecedor){
        $sql = "INSERT INTO fornecedor
        VALUES (default, :nome, :cidade, :estado, :cnpj)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $fornecedor->getNome());
        $con->bindValue(":cidade", $fornecedor->getCidade());
        $con->bindValue(":estado", $fornecedor->getEstado());
        $con->bindValue(":cnpj", $fornecedor->getCnpj());
        
        $con->execute();
        return "Cadastro com sucesso";

    }
    public function listaFornecedor(){
        $sql = "SELECT * FROM fornecedor";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($fornecedor = $con->fetch(\PDO::FETCH_ASSOC)){
            $lista[] = $fornecedor;
        }
        
        return $lista;
  

    }
}



?>
