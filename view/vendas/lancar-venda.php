<?php include __DIR__ . '/../header.php'; ?>
    <form action="/consome-api/insere-venda" method="post">
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor" class="form-control">
            <input type="hidden" name="id" id="id" value="<?= $id ?>" class="form-control">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
<?php include __DIR__ . '/../footer.php'; ?>