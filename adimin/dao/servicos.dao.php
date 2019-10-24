<?php
    class DAOCliente {
        public function cadastrar(Cliente $cliente) {
            $sql = "INSERT INTO cliente
                VALUES (default, :nome)";
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $cliente->getNome());
            $con->execute();
            echo "Cadastrado com sucesso";
        }
    }
?>