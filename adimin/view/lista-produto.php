<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $servicos) { ?>
        <tr>
            <th scope="row"><?php echo $servicos['pk_produto']; ?></th>
            <td><?php echo $servicos['nome']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>