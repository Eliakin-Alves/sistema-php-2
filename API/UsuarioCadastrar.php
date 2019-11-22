<?php

    namespace LOJA\API;
    use LOJA\Model\Usuario;
    use LOJA\DAO\DAOUsuario;

    class UsuarioCadastrar{
        public $msg;
    
        function __construct(){

    if($_POST){

        try{
            $obj = new Usuario();
            $obj->setNome($_POST['nome']);
            $obj->setSenha($_POST['senha']);
           

            $DAO = new DAOUsuario();
            $this->msg = $DAO->cadastrar($obj);

        }catch(Exception $e){
            $this->msg = $e->getMessage();
        }
    }
    }
 }

?>