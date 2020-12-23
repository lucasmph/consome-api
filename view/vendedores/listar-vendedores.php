<?php include __DIR__ . '/../header.php'; ?>
    <a href="/consome-api/novo-vendedor" class="btn btn-primary mb-2">Novo Vendedor</a>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">nome</th>
            <th scope="col">email</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendedores as $vendedor): ?>
                <tr>
                    <th scope="row"><?= $vendedor['id']; ?></th>
                    <td>
                        <?= $vendedor['nome']; ?>
                    </td>
                    <td>
                        <?= $vendedor['email']; ?>
                    </td>
                    <td>
                        <span>
                            <a href="/consome-api/listar-vendas?id=<?= $vendedor['id']; ?>" class="btn btn-info btn-sm">Listar Venda</a>
                        </span>
                        <span>
                            <a href="/consome-api/lancar-venda?id=<?= $vendedor['id']; ?>" class="btn btn-info btn-sm">Lançar Venda</a>
                        </span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php include __DIR__ . '/../footer.php'; ?>