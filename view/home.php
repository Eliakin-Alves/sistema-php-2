<?php include "View/header.php"; ?>
<link rel="stylesheet" href="css/estilo.css">

<h1></h1>

<div class='container'>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


            
<div class="card-deck">
  <div class="card">
    <img src="img/alinha.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Alinhamento</h5>
      <p class="card-text">O alinhamento das rodas em um veículo é a correção geométrica executada no conjunto de elementos que formam a suspensão, a qual permite ao veículo manter sua trajetória. </p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/pneu.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Troca De Pneus</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/poli.jpg" class="card-img-top bb" alt="...">
    <div class="card-body">
      <h5 class="card-title ss">Polimento</h5>
      <p class="card-text">Polimento é todo o procedimento realizado com o intuito de gerar ou reativar o brilho de quaisquer superfícies. Em geral, toda peça natural ou de manufatura, pode ser polida.</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
</div>
</div>
<div class='container tt'>
<div class="card mb-3">
  <img src="img/slide.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted"></small></p>
  </div>
  </div>
</div>

<form class="form-horizontal">
<fieldset>
<div class='container ww'>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label jj" for="textinput">Nome</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label jj" for="textinput">Telefone / WhatsApp</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label jj" for="textinput">E-mail </label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label jj" for="textarea">O que podemos fazer por você? </label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea">Digite aqui! </textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>
</div>
<?php include "View/footer.php"; ?>