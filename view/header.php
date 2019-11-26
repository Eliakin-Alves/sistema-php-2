<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Jomolhari|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>QualifiCAR</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand bg-yellow cont" href="#"><img src="img/logo.png" class="logo" alt=""></a>
            <button class="navbar-toggler bg-yellow-btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container center">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link bg-yellow" href="<?php echo $url; ?>/home">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-yellow" href="<?php echo $url; ?>/produto/cadastrar">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-yellow" href="<?php echo $url; ?>/servicos/cadastrar">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-yellow" href="#">Contato</a>
                        </li>
                    </ul>
                    <!-- <form class="form-inline my-2 my-lg-0"> -->
                        <div class="center input-group mb-3">
                            <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Username" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="btn btn-outline-success my-2 my-sm-0"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    <!-- </form> -->
                    <div class="container">
                        <button type="button" class="btn bg-yello">Login</button>
                        <button type="button" class="btn bg-whit">Registrar</button>
                        <a href="#" class="bg-yellow center"><i class="fas fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>