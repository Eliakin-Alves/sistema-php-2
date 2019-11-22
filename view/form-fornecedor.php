<?php include "view/header-adm.php";?>
<form class="form-horizontal" method="post" action="cadastrar">
<fieldset>

<!-- Form Name -->
<legend>Cadastrar Fornecedor</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Nome</label>  
  <div class="col-md-4">
  <input id="" name="nome" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Cidade</label>  
  <div class="col-md-4">
  <input id="" name="cidade" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Estado</label>  
  <div class="col-md-4">
  <input id="" name="estado" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">CNPJ</label>  
  <div class="col-md-4">
  <input id="" name="cnpj" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Cadastrar Fornecedor</button>
  </div>
</div>

</fieldset>
</form>
<?php include "view/footer.php";?>