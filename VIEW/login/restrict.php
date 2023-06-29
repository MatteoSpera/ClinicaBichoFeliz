<?php //onde esse código for incluído, será impossível acessar sem estar logado.
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/VIEW/login/logout.php';
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    if(!isset($_SESSION['login'])) logout(true); //desloga e vai pra index
?>