<?php 
session_start();
include_once('connection.php');
include_once('url.php');

$query = "SELECT * FROM contacts";
$stmp = $conn->prepare($query);
$stmp->execute();
$contacts = $stmp->fetchAll();