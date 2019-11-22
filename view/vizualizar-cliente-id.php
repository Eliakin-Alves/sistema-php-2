<?php include "view/header-adm.php";?>
<h1>Cliente Vizualizar(ID)</h1>
    
<form class="form-horizontal" method="post" action="cadastrar">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome"></label>  
  <div class="col-md-4">
  <input id="nome" name="nome" value="<?php echo $cliente['nome']; ?>"   type="text" placeholder="Nome" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone"></label>  
  <div class="col-md-4">
  <input id="cep" name="cep" type="text" placeholder="CEP" value="<?php echo $cliente['cep']; ?>"  class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email"></label>  
  <div class="col-md-4">
  <input id="email" name="email" value="<?php echo $cliente['email']; ?>" type="text" placeholder="E-mail" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf"></label>  
  <div class="col-md-4">
  <input id="cpf" name="cpf" value="<?php echo $cliente['cpf']; ?>" type="text" placeholder="CPF" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Cadastrar</button>
  </div>
</div>

</fieldset>
</form>
<?php include "view/footer.php";?>