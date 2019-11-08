<?php
namespace LOJA\API;
use LOJA\Model\Servico;
use LOJA\DAO\DAOServicos;
    class ServicosCadastrar {
        public $msg;
        function __construct(){
    
            if($_POST) {
                try {
                    $obj = new Servico();
                    $obj->setNome($_POST['nome']);
                    $DAO = new DAOServicos();
                    $this->msg = $DAO->cadastrar($obj);
                }
                catch(Exception $e) {
                    $this->$msg = $e->getMessage();
                }
            }
        }
    }
?>