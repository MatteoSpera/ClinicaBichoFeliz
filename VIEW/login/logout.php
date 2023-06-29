<?php
    function logout(bool $goToIndex = false, string $error = null){
        session_start();
        $_SESSION = array(); // limpa a sessão
        session_destroy(); //destrói
        unset($_SESSION['login']);

        if ($goToIndex)  //se o parâmetro for verdadeiro, vai para index depois de deslogar
        {
            $location = "location:/ClinicaBichoFeliz";
            if (isset($error)) $location .= "?error=". $error; //se houver erro, informa através de get
            header($location); 
        }
    }
?>