<?php
    namespace LOJA\DAO;
    use LOJA\Model\Conexao;
    use LOJA\Model\Servico;
    class DAOServicos {
        public function cadastrar(Servico $servicos) {
            $sql = "INSERT INTO servicos VALUES (default, :nome)";
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $servicos->getNome());
            $con->execute();
            return "Cadastrado com sucesso";
        }
        public function listaServicos() {
            $sql = "SELECT * FROM servicos";
            $con = Conexao::getInstance()->prepare($sql);
            $con->execute();
            $lista = array();
            while($servicos = $con->fetch(PDO::FETCH_ASSOC)){
                $lista[] = $servicos;
            }
            return $lista;
        }
        
    }
?>