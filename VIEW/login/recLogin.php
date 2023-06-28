<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/BLL/bllUsuario.php';

    $username = trim($_POST['username']); //trim remove espaços em branco antes e depois da string
    $senha = trim($_POST['senha']);

    $bll = new \BLL\bllUsuario;
    $user = $bll->SelectUsername($username); // Select Username retorna nulo se o usuário não existir
        
    if($user != null) //Só prossegue se o usuário existir
    {
        if(hash("sha256",$senha) == $user->getSenha()) //as senhas são guardadas em Hash no servidor, por isso, converte a digitada em hash, e compara
        //(md5 é obsoleto e inseguro, sha256 é um pouco melhor, mas o ideal são algoritmos mais modernos como Argon2 ou Bcrypt) 
        {
                session_start(); // inicia a sessão
                $_SESSION['login'] = $user->getUsername(); //loga o usuário
                header("location:../menu.php");
        }
        else echo "Senha Incorreta";
}
else echo "Usuário não Encontrado";
            
?>