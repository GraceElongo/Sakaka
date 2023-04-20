<?php
include'fonctions.php';

$etud= new Utilisateur();
$etud->setId($_POST['txtMat']);
$etud->setNom($_POST['txtNom']);
$etud->setAdresse($_POST['txtAdresse']);
$etud->setEmail($_POST['txtEmail']);
$etud->setImg($_POST['txtImg']);
$etud->setNewsletter($_POST['txtNewsletter']);
$etud->setPassword($_POST['txtPassword']);
$etud->setRegion($_POST['txtRegion']);
$etud->setRole($_POST['txtRole']);
$etud->setSex($_POST['txtSex']);
$etud->setTde($_POST['txtTde']);
$etud->setVille($_POST['txtVille']);



if(isset($_POST["save"]) && $_POST["save"]=="Save"){
    $etud->enregistrement();
}

?>