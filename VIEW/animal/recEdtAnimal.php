<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Animal.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/BLL/bllAnimal.php';

    $bll = new \BLL\bllAnimal;

    $animal = new \MODEL\Animal;

    $animal->setId($_POST['txtId']);
    $animal->setNome($_POST['txtNome']);
    $animal->setEspecie($_POST['txtEspecie']); 
    $animal->setCondicao($_POST['txtCondicao']); 
    $animal->setDono($_POST['txtDono']); 

    $bll->Update($animal);

    header("location: lstanimal.php");
?>