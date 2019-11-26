<?php include "view/header.php" ?>
<link rel="stylesheet" href="css/estilo.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://use.fontawesome.com/c560c025cf.js"></script>
<div class="container">
   <div class="card shopping-cart">
            <div class="card-header bg-yellow text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Carrinho de Compra
                <a href="" class="btn btn-outline-info btn-sm pull-right">Continuar compras</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
            <div class="row">
    <?php
        @$carrinho = $_SESSION['carrinho'];

        if($carrinho === null || empty($carrinho->getItems())){
            // Inicio HTML
            ?>
                <p>Seu Carrinho está vazio</p>

            <?php
            // Fim HTML
        }else{

            foreach ($carrinho->getItems() as $item){
                $produto = $item->getProduto();
                $link = "http://localhost/lojavirtual/carrinho/remover/".$produto->getId();
             
                // Inicio HTML
            ?>

                    <!-- PRODUCT -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong>Nome do Produto</strong></h4>
                            <h4>
                                <small>Descrição do Produto</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>   
                <?php   
                    // Fim HTML
                    }
                }
            ?>

</div>
                    <!-- END PRODUCT -->
                <div class="pull-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Atualizar carrinho de compras
                    </a>
                </div>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Código do cupom">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Usar cupom">
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Finalizar Compra</a>
                    <div class="pull-right" style="margin: 5px">
                    Valor total: <b>R$50</b>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php include "view/footer.php" ?>