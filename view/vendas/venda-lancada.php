<?php include __DIR__ . '/../header.php'; ?>
        <!-- a.btn.btn-primary.mb-2 ao dar ctrl espaço o VSCode transforma em tag-->
        <a href="/consome-api/listar-vendedores" class="btn btn-primary mb-2">Voltar</a>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
                ID: <?= $venda['id']; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                Nome: <?= $venda['nome']; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                E-mail: <?= $venda['email']; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                Comissão: <?= $venda['comissao']; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                Valor: <?= $venda['valor']; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                Data da Venda: <?= $venda['data']; ?>
            </li>
        </ul>
<?php include __DIR__ . '/../footer.php'; ?>