<?php include "view/header.php" ?>
<div class="container">
    <form class="form-horizontal" method="post" action="cadastrar">
        <fieldset>

            <!-- Form Name -->
            <h1>Cadastrar Produtos</h1>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome"></label>  
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="preco"></label>  
                <div class="col-md-4">
                    <input id="preco" name="preco" type="text" placeholder="Preco" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="descricao"></label>  
                <div class="col-md-4">
                    <input id="descricao" name="descricao" type="text" placeholder="Descricao" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="servico"></label>  
                <div class="col-md-4">
                    <select name="servico" class="form-control input-md">
                        <?php foreach($lista as $servicos) { ?>
                            <option value="<?php echo $servicos['pk_departamento']; ?>"><?php echo $servicos['nome']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
                <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cadastrar"></label>
                <div class="col-md-4">
                    <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<?php include "view/footer.php" ?>