<?php include "view/header.php" ?>
<table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $departamento) { ?>
                <tr>
                    <th scope="row"><?php echo $departamento['pk_departamento'] ?></th>
                    <td><?php echo $departamento['nome'] ?></td>
                </tr>  
                <?php } ?>
            </tbody>
        </table>
<?php include "view/footer.php" ?>