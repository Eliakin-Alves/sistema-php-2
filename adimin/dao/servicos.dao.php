<?php
    class DAOServicos {
        public function cadastrar(Servico $servico) {
            $sql = "INSERT INTO servicos VALUES (default, :nome)";
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $servico->getNome());
            $con->execute();
            return "Cadastrado com sucesso";
        }
    }
?>