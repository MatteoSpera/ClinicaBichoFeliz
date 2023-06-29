<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Especie.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/BLL/bllEspecie.php';

    $bll = new \BLL\bllEspecie;

    $especie = new \MODEL\Especie;

    $especie->setId($_POST['txtId']);
    $especie->setDescricao($_POST['txtDescricao']);
    $especie->setQuantidade($_POST['txtQuantidade']);

    $bll->Update($especie);

    header("location: lstEspecie.php");
?>