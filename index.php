<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/VIEW/login/logout.php';
    if(isset($_GET['logout']) and $_GET['logout']) logout(true); //se for requerido logout por get, desloga ao carregar


    session_start();
    if(isset($_SESSION['login'])) // se estiver logado, vai para a home, senão, vai para o Login
    {
        include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/VIEW/menu.php';
    } else
    {
        include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/VIEW/login/login.php' ;
    }
?>