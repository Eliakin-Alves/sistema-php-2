<?php
  namespace LOJA\API;
  
  use LOJA\Model\Produto;
  use LOJA\Model\Servico;
  use LOJA\DAO\DAOProduto;
  use LOJA\incluedes\Util;

  class ProdutoCadastrar{
    public $msg;

    function __construct(){
      if($_POST){
  try{
    //criamos um objeto prudoto
      $produto = new Produto();
      $produto->setNome($_POST['nome']);
      $produto->setPreco($_POST['preco']);
      $produto->setDescricao($_POST['descricao']);
      $produto->setImagem(Util::uploadImg());

      //cria um objeto departamento
      $servico = new Servico();
      $servico->setId($_POST['servico']);

      //definindo o departamento para o produto
      $produto->setServico($servico);

      $DAO = new DAOProduto();
      $this->msg = $DAO->cadastrar($produto);
      
    }catch(Exception $e){
      $this->msg = $e->getMessage();
    }
  }
}
}
?>