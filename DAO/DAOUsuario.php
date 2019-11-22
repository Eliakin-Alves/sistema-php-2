<?php 
    namespace LOJA\DAO;
    use LOJA\Model\Conexao;
    use LOJA\Model\Usuario;

    class DAOUsuario{
    public function cadastrar(Usuario $usuario){
        $sql = "INSERT INTO usuario
        VALUES (default, :nome, :senha)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $usuario->getNome());
        $con->bindValue(":senha", $usuario->getSenha());
        $con->execute();

        return "CADASTROU O ADMIN COM SUCESSO";

    }
    public function buscoPorNomeSenha(Usuario $usuario){
        $sql = "SELECT pk_usuario as id,nome 
        FROM usuario WHERE nome = :nome AND 
        senha = :senha";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $usuario->getNome());
        $con->bindValue(":senha", $usuario->getSenha());
        $con->execute();
        
      
        $usuario = new Usuario();
        $usuario = $con->fetch(\PDO::FETCH_ASSOC);
        return $usuario;
       
       

    }
    public function listaUsuario(){
        $sql = "SELECT * FROM usuario";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($usuario = $con->fetch(\PDO::FETCH_ASSOC)){
            $lista[] = $usuario;
        }
        
        return $lista;
        
    }
   
    public function buscaPorId($id){

        $sql = "SELECT * FROM usuario WHERE pk_usuario = :id";
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":id", $id);
        $con->execute();

        $usuario = new Usuario();

        $usuario = $con->fetch(\PDO::FETCH_ASSOC);
        // print_r($usuario);//testa saida 
        return $usuario;

    }
  
}



?>
