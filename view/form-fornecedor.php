<div class="container">
    <form class="form-horizontal" method="post" action="cadastrar">
        <fieldset>

            <!-- Form Name -->
            <h1>Cadastrar Fornecedores</h1>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cidade"></label>  
                <div class="col-md-4">
                    <input id="cidade" name="cidade" type="text" placeholder="cidade" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="estado"></label>  
                <div class="col-md-4">
                    <input id="estado" name="estado" type="text" placeholder="estado" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="cnpj"></label>  
                <div class="col-md-4">
                    <input id="cnpj" name="cnpj" type="text" placeholder="cnpj" class="form-control input-md">
                </div>
            </div>
            <!--
            <div class="form-group">
                <label class="col-md-4 control-label" for="servico"></label>  
                <div class="col-md-4">
                    <select name="servico" class="form-control input-md">
                        <?php  foreach($lista as $servicos) { ?>
                            <option value="<?php echo $servicos['pk_departamento']; ?>"><?php echo $servicos['nome']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            -->
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