<?php include_once('./templates/header.php'); ?>
   <div class="container" id="view-container">
    <?php require_once('templates/backbtn.html'); ?>
    <h1 id="main-title-show">
        <?= $contact['name']; ?>
    </h1>
    <p class="bold">Telefone:</p>
    <p><?= $contact['phone']; ?></p>
    <p class="bold">Observações:</p>
    <p><?= $contact['observations']; ?></p>
   </div>
<?php include_once('./templates/footer.php'); ?>