<?php
    namespace LOJA\API;
    use LOJA\Model\Cliente;
    use LOJA\DAO\DAOCliente;
    class ClienteCadastrar {
        public $msg;
        function __construct() {
            if($_POST) {
                try {
                    $obj = new Cliente();
                    $obj->setNome($_POST['nome']);
                    $obj->setCpf($_POST['cpf']);
                    $obj->setEndereco($_POST['endereço']);
                    $obj->setCep($_POST['cep']);
                    $obj->setTelefone($_POST['telefone']);
                    $obj->setEmail($_POST['email']);
                    $DAO = new DAOCliente();
                    $msg = $DAO->cadastrar($obj);
                }
                catch(Exception $e) {
                    $this->$msg = $e->getMenssagem();
                }
            }
        }
    }
?>