<?php include "view/header-adm.php";?>
<link rel="stylesheet" href="../css/estilo.css">


<!-- Example single danger button -->
<div class="btn-group p">
  <button type="button" class="btn btn-primary dropdown-toggle p" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Notifications <span class="badge badge-light">4</span>
  </button>
  <div class="dropdown-menu">
    <p>O Cliente Coringa Acaba de efetua um Pedido Pelo serviço de alinhamento</p>
    <hr>
    <a class="dropdown-item  azul" href="#">Verificar</a>
  
  </div>
</div>

    <?php  echo $_SESSION['usuarionome'];?>
    <!-- Button trigger modal -->

   <p></p>
    <a class="btn btn-primary" href="http://localhost/carro/painel/logoff">Sair</a>


  


    


<?php include "view/footer.php";?>