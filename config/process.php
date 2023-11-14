<?php 
session_start();
include_once('connection.php');
include_once('url.php');

// Retorna um único contato 
$id;
if(!empty($_GET)){
    $id = $_GET['id'];
}
if(!empty($id)){ 
    $query = "SELECT * FROM contacts WHERE id=:id";
    $stmp = $conn->prepare($query);
    $stmp->bindParam(":id",$id);
    $stmp->execute();
    $contact = $stmp->fetch();
}else{
    // Retorna todo os contatos 
    $query = "SELECT * FROM contacts";
    $stmp = $conn->prepare($query);
    $stmp->execute();
    $contacts = $stmp->fetchAll();
}