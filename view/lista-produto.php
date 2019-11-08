<?php include "view/header.php" ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">PREÇO</th>
            <th scope="col">DEPARTAMENTO</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $servicos) { ?>
        <tr>
            <th scope="row"><?php echo $servicos['id']; ?></th>
            <td><?php echo $servicos['nome']; ?></td>
            <td>R$ <?php echo number_format($servicos['preco'],2,",","."); ?></td>
            <td><?php echo $servicos['servicos']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php include "view/footer.php" ?>