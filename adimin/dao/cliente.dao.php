<?php
    class DAOCliente {
        public function cadastrar(Cliente $cliente) {
            $sql = "INSERT INTO cliente
                VALUES (default, :nome, :cpf, :endereco, :cep, :telefone, :email)";
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $cliente->getNome());
            $con->bindValue(":cpf", $cliente->getCpf());
            $con->bindValue(":endereco", $cliente->getEndereco());
            $con->bindValue(":cep", $cliente->getCep());
            $con->bindValue(":telefone", $cliente->getTelefone());
            $con->bindValue(":email", $cliente->getEmail());
            $con->execute();
            echo "Cadastrado com sucesso";
        }
    }
?>