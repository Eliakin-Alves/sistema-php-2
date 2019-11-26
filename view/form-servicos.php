<?php include "view/header.php" ?>
<div class="container">
    <form class="form-horizontal" method="post" action="cadastrar">
        <fieldset>

            <!-- Form Name -->
            <h1>Novos Serviços</h1>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome"></label>  
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md">
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