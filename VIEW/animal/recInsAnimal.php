<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Animal.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/BLL/bllAnimal.php';

use MODEL\Animal;

    $animal = new \MODEL\Animal;

    // $_POST = variável contendo as infos recebidas através do método POST
    $animal->setNome($_POST['txtNome']); 
    $animal->setEspecie($_POST['txtEspecie']); 
    $animal->setCondicao($_POST['txtCondicao']); 
    $animal->setDono($_POST['txtDono']); 
    

    $bll = new \BLL\bllAnimal();
    $bll->Insert($animal);

    header("location:lstAnimal.php");
    
?>