<?php
    namespace LOJA\API; // local desta classe
    use LOJA\DAO\DAOServicos;
    class ServicosVisualizar {
        public $dados;
        public function __construct() {
            try {
                $DAO = new DAOServicos();
                $this->dados = $DAO->buscarPorId($_GET['id']);
            }
            catch(\Exception $e) {
                $this->dados = $e->getMessage();
            }
        }
    }
?>