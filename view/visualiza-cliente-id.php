<?php include "view/header.php" ?>
<div class="container">
    <form class="form-horizontal" method="post" action="ctrl-cadastro-usuario.php">
        <fieldset>
            <!-- Form Name -->
            <h1>Visualizar</h1>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>  
            <div class="col-md-4">
                <input id="nome" name="nome" value="<?php echo $cliente['nome'];?>" type="text" placeholder="Nome" class="form-control input-md">
            </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="telefone">telefone</label>  
            <div class="col-md-4">
                <input id="telefone" name="telefone" value="<?php echo $cliente['telefone'];?>" type="text" placeholder="telefone" class="form-control input-md">
            </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">email</label>  
            <div class="col-md-4">
                <input id="email" name="email" value="<?php echo $cliente['email'];?>" type="text" placeholder="email" class="form-control input-md">
            </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="cpf">cpf</label>  
            <div class="col-md-4">
                <input id="cpf" name="cpf" value="<?php echo $cliente['cpf'];?>" type="text" placeholder="cpf" class="form-control input-md">
            </div>
            </div>
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cadastrar"></label>
                <div class="col-md-4">
                    <button id="cadastrar" name="cadastrar" class="btn btn-primary">cadastrar</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<?php include "view/footer.php" ?>