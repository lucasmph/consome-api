<?php include __DIR__ . '/../header.php'; ?>
    <form action="/consome-api/salvar-vendedor" method="post">
        <div class="form-group">
            <label for="email">e-mail:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="nome">nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
<?php include __DIR__ . '/../footer.php'; ?>