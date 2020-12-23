<?php include __DIR__ . '/../header.php'; ?>
    <a href="/consome-api/listar-vendedores" class="btn btn-primary mb-2">Voltar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">vendedor</th>
                <th scope="col">email</th>
                <th scope="col">comissao</th>
                <th scope="col">valor da venda</th>
                <th scope="col">data da venda</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendas as $venda): ?>
                <tr>
                    <th scope="row"><?= $venda['id']; ?></th>
                    <td>
                        <?= $venda['nome']; ?>
                    </td>
                    <td>
                        <?= $venda['email']; ?>
                    </td>
                    <td>
                        <?= $venda['comissao']; ?>
                    </td>
                    <td>
                        <?= $venda['valor']; ?>
                    </td>
                    <td>
                        <?php echo (new  \DateTime($venda['data']))->format('d/m/y'); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php include __DIR__ . '/../footer.php'; ?>