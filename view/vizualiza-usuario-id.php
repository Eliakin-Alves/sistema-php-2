<?php include "view/header-adm.php";?>
<h1>USUARIO</h1>
    
<form class="form-horizontal" method="post" action="vizualizar">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome"></label>  
  <div class="col-md-4">
  <input id="nome" name="nome" value="<?php echo $usuario['nome']; ?>" type="text" placeholder="Nome" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha"></label>  
  <div class="col-md-4">
  <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="">
    
  </div>
</div>





<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">ATUALIZAR ADMIN</button>
  </div>
</div>

</fieldset>
</form>
<?php include "view/footer.php";?>


