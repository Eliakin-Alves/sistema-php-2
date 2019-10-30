<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $usuario) { ?>
        <tr>
            <th scope="row"><?php echo $usuario['pk_usuario']; ?></th>
            <td><?php echo $usuario['login']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>