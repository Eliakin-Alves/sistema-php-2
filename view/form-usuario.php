<?php include "view/header-adm.php";?>

<h1>CADASTRO DO ADMIN</h1>
    
<form class="form-horizontal" method="post" action="cadastrar">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label badge badge-light adm" for="nome">Nome</label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label badge badge-light adm" for="senha">Senha</label>  
  <div class="col-md-4">
  <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>





<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label " for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Cadastrar ADMIN</button>
  </div>
</div>

</fieldset>
</form>


<?php include "view/footer.php";?>