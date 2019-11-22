<?php include "view/header-adm.php";?>
<form method="post" action="cliente">
<fieldset>

<!-- Form Name -->
<h2>LOGIN
SOU CLIENTE</h2>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label badge badge-light" for="name">Nome</label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label badge badge-dark" for="senha">Senha</label>
  <div class="col-md-4">
    <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Entrar</button>
  </div>
</div>

</fieldset>
</form>
<?php include "view/footer.php";?>
