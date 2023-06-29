<?php
    function logout(bool $goToIndex = false){
        session_start();
        $_SESSION = array(); // limpa a sessão
        session_destroy(); //destrói
        unset($_SESSION['login']);
        if ($goToIndex) header("location:/ClinicaBichoFeliz"); //se o parâmetro for verdadeiro, vai para index depois de deslogar
    }
?>