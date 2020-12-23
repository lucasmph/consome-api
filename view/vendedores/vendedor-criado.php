<?php include __DIR__ . '/../header.php'; ?>
        <!-- a.btn.btn-primary.mb-2 ao dar ctrl espaço o VSCode transforma em tag-->
        <a href="/consome-api/listar-vendedores" class="btn btn-primary mb-2">Voltar</a>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
                ID: <?= $vendedor['id']; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                Nome: <?= $vendedor['nome']; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                E-mail: <?= $vendedor['email']; ?>
            </li>
        </ul>
<?php include __DIR__ . '/../footer.php'; ?>