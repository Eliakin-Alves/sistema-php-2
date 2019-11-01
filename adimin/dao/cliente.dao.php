<?php
    class DAOCliente {
        public function cadastrar(Cliente $cliente) {
            $sql = "INSERT INTO cliente VALUES (default, :nome, :cpf, :endereco, :cep, :telefone, :email)";
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $cliente->getNome());
            $con->bindValue(":cpf", $cliente->getCpf());
            $con->bindValue(":endereco", $cliente->getEndereco());
            $con->bindValue(":cep", $cliente->getCep());
            $con->bindValue(":telefone", $cliente->getTelefone());
            $con->bindValue(":email", $cliente->getEmail());
            $con->execute();
            return "Cadastrado com sucesso";
        }
        public function listaClientes() {
            $sql = "SELECT * FROM cliente";
            $con = Conexao::getInstance()->prepare($sql);
            $con->execute();
            $lista = array();
            while($cliente = $con->fetch(PDO::FETCH_ASSOC)) {
                $lista[] = $cliente;
            }
            return $lista;
        }
        public function buscaPorId($id){
            $sql = "SELECT * FROM cliente WHERE pk_id = :id";
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":id", $id);
            $con->execute();
            $cliente = new Cliente();
            $cliente = $con->fetch(PDO::FETCH_ASSOC);
            //print_r($cliente);//testa saida 
            return $cliente;
        }
    }
?>