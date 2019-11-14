<?php
    namespace LOJA\API;
    use LOJA\Model\Usuario;
    use LOJA\DAO\DAOUsuario;

    class UsuarioLogar {
        public $msg;
        function __construct() {
            if($_POST) {
                try {
                    $obj = new Usuario();
                    $obj->setNome($_POST['nome']);
                    $obj->setSenha($_POST['senha']);

                    $DAO = new DAOUsuario();
                    $result = $DAO->buscaPorNomeSenha($obj);
                    if($result) {
                        $_SESSION['usuarioid'] = $result['id'];
                        $_SESSION['usuarionome'] = $result['nome'];
                        header("location: http://127.0.0.1/sistema-php-2/painel/adm");
                    }
                    else {
                        $this->msg = "Usuário/Senha inválidos";
                    }
                }
                catch(\Exception $e) {
                    $this->msg = $e->getMessage();
                }
            }
        }
    }
?>