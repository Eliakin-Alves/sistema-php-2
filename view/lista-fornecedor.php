<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CIDADE</th>
            <th scope="col">ESTADO</th>
            <th scope="col">CNPJ</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $fornecedor) { ?>
        <tr>
            <th scope="row"><?php echo $fornecedor['pk_id']; ?></th>
            <td><?php echo $fornecedor['cidade']; ?></td>
            <td><?php echo $fornecedor['estado']; ?></td>
            <td><?php echo $fornecedor['cnpj']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>