<?php include_once('./templates/header.php') ?>
    <div class="container">
    <?php require_once('templates/backbtn.html'); ?>
    <h1 id="main-title-show">
        Criar contato
    </h1>
    <form id="create-form" action="<?php $BASE_URL; ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="from-group">
            <label for="name">Nome do contato:</label>
            <input type="text" name="name" id="name" required class="form-control" placeholder="Digite o nome" >
        </div>
        <div class="from-group">
            <label for="phone">Telefone do contato:</label>
            <input type="text" name="phone" id="phone" required class="form-control" placeholder="(xx)xxxx-xxxx" >
        </div>
        <div class="from-group">
            <label for="observations">Observações:</label>
            <textarea name="observations" id="observations" class="form-control" rows="3" placeholder="Sua observações"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
    </form>
    </div>
<?php include_once('./templates/footer.php') ?>