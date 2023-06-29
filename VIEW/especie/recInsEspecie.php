<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Especie.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/BLL/bllEspecie.php';

    $especie = new \MODEL\Especie;

    // $_POST = variável contendo as infos recebidas através do método POST
    $especie->setDescricao($_POST['txtDescricao']); 
    $especie->setQuantidade(0);

    $bll = new \BLL\bllEspecie();
    $bll->Insert($especie);// insere a Espécie
    $bll->RefreshAll(); //Atualiza a Quantidade, apesar de que provavelmente não há animais da espécie recém cadastrada

    header("location:lstEspecie.php");
    
?>