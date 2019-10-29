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
    }
?>