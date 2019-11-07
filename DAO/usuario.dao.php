<?php
    class DAOUsuario {
        public function cadastrar(Usuario $usuario) {
            $sql = "INSERT INTO usuario VALUES (default, :nome, :senha)";
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $usuario->getNome());
            $con->bindValue(":senha", $usuario->getSenha());
            $con->execute();
            return "Cadastrado com sucesso";
        }

        public function listaUsuarios() {
            $sql = "SELECT * FROM usuario";
            $con = Conexao::getInstance()->prepare($sql);
            $con->execute();
            $lista = array();
            while($usuario = $con->fetch(PDO::FETCH_ASSOC)){
                $lista[] = $usuario;
            }
            return $lista;
        }
    }
?>