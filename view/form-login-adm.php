<?php include "view/header.php" ?>
<form class="form-horizontal container" method="post" action="adm">
<fieldset>

<!-- Form Name -->
<h1>Login Administrador</h1>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha">Senha</label>
  <div class="col-md-4">
    <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="entrar"></label>
  <div class="col-md-4">
    <button id="entrar" name="entrar" class="btn btn-primary">Entrar</button>
  </div>
</div>

</fieldset>
</form>
<?php include "view/footer.php"; ?>