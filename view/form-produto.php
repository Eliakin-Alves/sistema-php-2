<?php include "view/header.php" ?>

<form class="form-horizontal" method="post" action="cadastrar" enctype="multipart/form-data">
        <fieldset>
            <!-- Form Name -->
            <legend>Cadastro de Produtos</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>  
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="preco">Preço</label>  
                <div class="col-md-4">
                    <input id="preco" name="preco" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="departamento">Departamento</label>  
                <div class="col-md-4">
                   <select name="servico" class="form-control input-md">
                    <?php foreach($lista as $departamento) { ?>
                            <option value="<?php echo $departamento['pk_departamento'] ?>">
                            <?php echo $departamento['nome'] ?></option>
                        <?php } ?>
                   </select>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="descricao">Descricao</label>  
                <div class="col-md-4">
                    <input id="descricao" name="descricao" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="descricao">Imagem    </label>  
                <div class="col-md-4">
  <input id="imagem" name="imagem" type="file" placeholder="" class="form-control input-md" required="">
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
<?php include "view/footer.php" ?>