
<?php include "view/header-adm.php";?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
       
        </th>
    </thead>
    <tbody>
        <?php foreach($lista as $servico) { ?>
            <tr>
                <th scope="row"><?php echo $servico['pk_servico']?></th>    
                <td><?php echo $servico['nome']?></td>
               
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include "view/footer.php";?>

