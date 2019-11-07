<?php
namespace LOJA\Actions;
use LOJA\Model\Servico;
use LOJA\DAO\DAOServicos;
    class ServicosCadastrar {
        function __construct(){
    
            if($_POST) {
                try {
                    $obj = new Servico();
                    $obj->setNome($_POST['nome']);
                    $DAO = new DAOServicos();
                    $msg = $DAO->cadastrar($obj);
                }
                catch(Exception $e) {
                    $msg = $e->getMenssagem();
                }
            }
        }
    }
?>