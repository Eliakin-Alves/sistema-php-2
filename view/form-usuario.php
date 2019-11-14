<?php include "view/header.php" ?>

<form class="form-horizontal" method="post" action="cadastrar">
        <fieldset>
            <!-- Form Name -->
            <legend>Cadastro de Usuarios</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>  
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Senha</label>  
                <div class="col-md-4">
                    <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required="">
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