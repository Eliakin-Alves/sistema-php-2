<?php include "view/header-adm.php";?>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2 class="top"><i class="fas fa-address-card"></i> CRIAR CONTA <br>
SOU NOVO CLIENTE </h2>
    <hr>
   <!--Parte 1-->

<form class="form-horizontal " method="post" action="cadastrar">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label " for="nome"><strong class="mr-auto">Nome</strong></label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="Digite Seu nome" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone"><strong class="mr-auto">CPF</strong></label>  
  <div class="col-md-4">
  <input id="cpf" name="cpf" type="text" placeholder="Digite Seu CPF" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cep"><strong class="mr-auto">CEP</strong></label>  
  <div class="col-md-4">
  <input id="cep" name="cep" type="text" placeholder="Digite Seu CEP" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="endereco"><strong class="mr-auto">Endereço</strong></label>  
  <div class="col-md-4">
  <input id="endereco" name="endereco" type="text" placeholder="Digite Seu Endereço" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone"><strong class="mr-auto">Telefone</strong></label>  
  <div class="col-md-4">
  <input id="telefone" name="telefone" type="text" placeholder="Digite Seu Telefone" class="form-control input-md" required="">
    
  </div>
</div>



  <!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="email"><strong class="mr-auto">E-mail</strong></label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Digite Seu E-mail" class="form-control input-md" required="">
    
  </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="senha"><strong class="mr-auto">Senha</strong></label>  
  <div class="col-md-4">
  <input id="senha" name="senha" type="password_verify" placeholder="Crie Sua Senha" class="form-control input-md" required="">
    
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