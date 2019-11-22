
<?php include "view/header-adm.php";?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
           
        </th>
    </thead>
    <tbody>
        <?php foreach($lista as $usuario) { ?>
            <tr>
                <th scope="row"><?php echo $usuario['pk_usuario']?></th>    
                <td><?php echo $usuario['nome']?></td>
              
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php include "view/footer.php";?>

