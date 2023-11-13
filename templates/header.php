<?php 
    include_once('./config/url.php');
    include_once('./config/process.php');
    // Limpa a mensagem 
    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?=  $BASE_URL;?>css/style.css">
</head>
<body>
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-primary  ">
            <a class="navbar-brand" href="<?php $BASE_URL; ?>index.php">
                <img src="<?php $BASE_URL; ?>img/logo.svg" alt="Agenda">
            </a>
            <div class="">
            <div class="navbar-nav">
                <a href="<?php $BASE_URL; ?>index.php" class="nav-link active " id="home-link" >Agenda</a>
                <a href="<?php $BASE_URL; ?>create.php" class="nav-link active" id="home-link" >Adicionar Contato</a>
            </div>
        </div>
        </div>

    </header>