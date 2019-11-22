<?php include "view/header-adm.php";?>

<h1>LOGIN DO ADMIN</h1>
    
<form  method="post" action="adm">
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
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Entrar</button>
  </div>
</div>

</fieldset>
</form>


<?php include "view/footer.php";?>