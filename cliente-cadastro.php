
<?php include "includes/cliente-cadastrar.php"; ?>
<?php include "includes/header.php"; ?>

  <div class="container">
  <form class="form-horizontal" method="post" action="cliente-cadastro.php">
  <fieldset>

  <!-- Form Name -->
  <legend>Cliente Cadastro</legend>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="nome"></label>  
    <div class="col-md-4">
    <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="cpf"></label>  
    <div class="col-md-4">
    <input id="cpf" name="cpf" type="text" placeholder="CPF" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="endereco"></label>  
    <div class="col-md-4">
    <input id="endereco" name="endereco" type="text" placeholder="Endereço" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="cep"></label>  
    <div class="col-md-4">
    <input id="cep" name="cep" type="text" placeholder="CEP" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="telefone"></label>  
    <div class="col-md-4">
    <input id="telefone" name="telefone" type="text" placeholder="Telefone" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="email"></label>  
    <div class="col-md-4">
    <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md">
      
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="cadastrar"></label>
    <div class="col-md-4">
      <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
    </div>
  </div>

  </fieldset>
  </form>
  </div>
<?php include "includes/footer.php"; ?>
