<?php
namespace LOJA\DAO;
use LOJA\Model\Conexao;
use LOJA\Model\Usuario;
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
        public function buscaPorNomeSenha(Usuario $usuario) {
            $sql = "SELECT pk_usuario as id,nome FROM usuario WHERE nome = :nome AND senha = :senha";

            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $usuario->getNome());
            $con->bindValue(":senha", $usuario->getSenha());
            $result = $con->execute();

            $obj = new Usuario();
            $obj = $con->fetch(\PDO::FETCH_ASSOC);

            return $obj;


            /*if($con->fetchColumn()>0) {
                $usuario = new Usuario();
                $usuario = $con->fetch(\PDO::FETCH_ASSOC);
                return $usuario;
            }
            else {
                return null;
            }*/
        }
    }
?>