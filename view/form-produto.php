<?php include "view/header-adm.php";?>
<h1>CADASTRO DO ADMIN</h1>
    
    <form class="form-horizontal" method="post" action="cadastrar" enctype="multipart/form-data">
    <fieldset>
    
    <!-- Form Name -->
    
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="nome"></label>  
      <div class="col-md-4">
      <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md" required="">
        
      </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="preco"></label>  
      <div class="col-md-4">
      <input id="preco" name="preco" type="text" placeholder="Preço" class="form-control input-md" required="">
        
      </div>
      
    </div><!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="descricao"></label>  
      <div class="col-md-4">
      <input id="descricao" name="descricao" type="text" placeholder="Descrição" class="form-control input-md" required="">
        
      </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="servico"></label>  
      <div class="col-md-4">
      <select name="servico" class="form-control input-md">
      <?php foreach($lista as $servico) { ?>
        <option value="<?php echo $servico['pk_servico']?>"><?php echo $servico['nome']?>  </option>
      <?php } ?> 
      
      </select>
      </div>
    </div>

    <!-- Text input-->
      <div class="form-group">
      <label class="col-md-4 control-label" for="descricao"></label>
      <div class="col-md-4">
      <input id="imagem" name="imagem" type="file" class="btn btn-dark" placeholder="INSERIR IMAGEM" class="form-control input-md" required="">
      </div>
      </div>
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Cadastrar Produto</button>
      </div>
    </div>
    
    </fieldset>
    </form>
    
    <?php include "view/footer.php";?>
    