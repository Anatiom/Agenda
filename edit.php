<?php include_once('./templates/header.php') ?>
    <div class="container">
    <?php require_once('templates/backbtn.html'); ?>
    <h1 id="main-title-show">
        Editar contato
    </h1>
    <form id="create-form" action="<?php $BASE_URL; ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact['id']; ?>">
        <div class="from-group">
            <label for="name">Nome do contato:</label>
            <input type="text" value="<?= $contact['name']; ?>" name="name" id="name" required class="form-control" placeholder="Digite o nome" >
        </div>
        <div class="from-group">
            <label for="phone">Telefone do contato:</label>
            <input type="text" value="<?= $contact['phone']; ?>" name="phone" id="phone" required class="form-control" placeholder="(xx)xxxx-xxxx" >
        </div>
        <div class="from-group">
            <label for="observations">Observações:</label>
            <textarea name="observations" id="observations" class="form-control" rows="3" placeholder="Sua observações">
                <?= $contact['observations']; ?>
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Atualizar</button>
    </form>
    </div>
<?php include_once('./templates/footer.php') ?>