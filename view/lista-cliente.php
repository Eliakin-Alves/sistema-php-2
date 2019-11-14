<?php include "view/header.php" ?>
<table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">TELEFONE</th>
                    <th scope="col">E-MAIL</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $cliente) { ?>
                <tr>
                    <th scope="row"><?php echo $cliente['pk_cliente'] ?></th>
                    <td><?php echo $cliente['nome'] ?></td>
                    <td><?php echo $cliente['telefone'] ?></td>
                    <td><?php echo $cliente['email'] ?></td>
                </tr>  
                <?php } ?> 
            </tbody>
        </table>
<?php include "view/footer.php" ?>