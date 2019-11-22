
<?php include "view/header-adm.php";?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">ENDEREÇO</th>
            <th scope="col">CEP</th>
           <!-- <th scope="col">E-MAIL</th>-->
            <th scope="col">CPF</th>
        </th>
    </thead>
    <tbody>
        <?php foreach($lista as $cliente) { ?>
            <tr>
                <th scope="row"><?php echo $cliente['pk_cliente']?></th>    
                <td><?php echo $cliente['nome']?></td>
                <td><?php echo $cliente['endereco']?></td>
                <td><?php echo $cliente['cep']?></td>
                <td><?php echo $cliente['cpf']?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php include "view/footer.php";?>

