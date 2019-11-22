<?php
namespace LOJA\DAO;
use LOJA\Model\Conexao;
use LOJA\Model\Servico;

class DAOServico{
    public function cadastrar(Servico $servico){
        $sql = "INSERT INTO servico
        VALUES (default, :nome)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $servico->getNome());
        $con->execute();

        return "Cadastro o Serviço com Sucesso";

    }
    public function listaServico(){
        $sql = "SELECT * FROM servico";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($servico = $con->fetch(\PDO::FETCH_ASSOC)){
            $lista[] = $servico;
        }
        
        return $lista;
        
    }
    public function buscaPorId($id){

        $sql = "SELECT * FROM servico WHERE pk_servico = :id";
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":id", $id);
        $con->execute();

        $servico = new Servico();

        $servico = $con->fetch(\PDO::FETCH_ASSOC);
        //print_r($cliente);//testa saida 
        return $servico;

    }
}


?>
