
<?php include "view/header-adm.php";?>
<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">PREÇO</th>
            <th scope="col">SERVIÇO</th>
            <th scope="col"></th>
            
        </th>
    </thead>
    <tbody>
        <?php foreach($lista as $produto) { ?>
            <tr>
                <td><img width="50" src="../View/img/produtos/<?php echo $produto['imagem'] ?>"></td>
                <th scope="row"><?php echo $produto['id']?></th>    
                <td><?php echo $produto['nome']?></td>
                <td><?php echo number_format($produto['preco'],2,",",".");?></td>
               
                <td><?php echo $produto['servico']?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include "view/footer.php";?>
