<?php 
session_start();
include_once('connection.php');
include_once('url.php');


$data = $_POST;
if(!empty($data)){
    if($data['type'] === 'create'){
        $name = $data['name'];
        $phone = $data['phone'];
        $observations = $data['observations'];
        $query = "INSERT INTO contacts (name, phone, observations) 
        VALUES(:name, :phone, :observations)";
        $stmp = $conn->prepare($query);
        $stmp->bindParam(":name", $name);
        $stmp->bindParam(":phone", $phone);
        $stmp->bindParam(":observations", $observations);
        try{
            $stmp->execute();
            $_SESSION['msg'] = 'Contato criado com sucesso!';
          
        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Error: $error";
        }
        header("Location:". $BASE_USL."../index.php");
    }
    else if($data['type'] === 'edit'){
    $name = $data['name'];
    $phone = $data['phone'];
    $observations = $data['observations'];
    $id = $data['id'];
    $query = "UPDATE contacts SET name= :name, phone= :phone,
     observations= :observations WHERE id=:id";
    $stmp = $conn->prepare($query);
    $stmp->bindParam(":id", $id);
    $stmp->bindParam(":name", $name);
    $stmp->bindParam(":phone", $phone);
    $stmp->bindParam(":observations", $observations);
    try{
        $stmp->execute();
        $_SESSION['msg'] = 'Contato aztualizado com sucesso!';
      
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "Error: $error";
    }
    header("Location:". $BASE_USL."../index.php");
    }

    }else{
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
}
$conn = null;