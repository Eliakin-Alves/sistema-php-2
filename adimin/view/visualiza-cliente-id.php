<div class="container">
    <form class="form-horizontal offset-md-3" method="POST" action="ctrl-usuario-visualiza.php">
        <fieldset>
            <!-- Form Name -->
            <legend>Cadastro de Usuario</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">nome</label>  
                <div class="col-md-4">
                    <input id="nome" name="nome" value="<?php echo $cliente['nome']?>" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="senha">Senha</label>  
                <div class="col-md-4">
                    <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required=""> 
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