<?php //include "view/header.php" ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Jomolhari|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Login</h1>
						 </div>
					</div>
                   <form action="adm" method="post" name="login">
                           <div class="form-group">
                              <label for="nome">EMAIL</label>
                              <input type="nome" name="nome"  class="form-control" id="nome" aria-describedby="nome" placeholder="Email">
                           </div>
                           <div class="form-group">
                              <label for="senha">SENHA</label>
                              <input type="password" name="senha" id="senha"  class="form-control" aria-describedby="senha" placeholder="senha">
                           </div>
                           <div class="form-group">
                              <p class="text-center">Ao se inscrever, você aceita nossos <a href="#">Termos de Uso</a></p>
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">ou</span>
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <p class="text-center">
                                 <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                 </i> Inscrição usando o Google
                                 </a>
                              </p>
                           </div>
                           <div class="form-group">
                              <p class="text-center">Não tem conta? <a href="#" id="signup">Assine aqui</a></p>
                           </div>
                        </form>
                 
				</div>
			</div>
			  <div id="second">
			      <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Signup</h1>
                           </div>
                        </div>
                        <form action="#" name="registration">
                           <div class="form-group">
                              <label for="exampleInputEmail1">First Name</label>
                              <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Last Name</label>
                              <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                              </div>
                           </div>
                            </div>
                        </form>
                     </div>
			</div>
		</div>
      </div>   
         
</body>


















    <!--<div class="bg-whit">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form class="form-horizontal" method="post" action="adm">
                        <fieldset>-->

                        <!-- Form Name -->
                        <!--<h1></h1>-->

                        <!-- Text input-->
                        <!--<div class="form-group">
                            <label class="col-md-4 control-label" for="nome"></label>  
                            <div class="col-md-4">
                                <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md">
                            </div>
                        </div>-->

                        <!-- Password input-->
                        <!--<div class="form-group">
                            <label class="col-md-4 control-label" for="senha"></label>
                            <div class="col-md-4">
                                <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md">
                            </div>
                        </div>-->

                        <!-- Button -->
                        <!--<div class="form-group">
                            <label class="col-md-4 control-label" for="entrar"></label>
                            <div class="col-md-4">
                                <button id="entrar" name="entrar" class="btn btn-primary">Entrar</button>
                            </div>
                        </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>-->
<?php //include "view/footer.php"; ?>