<?php

namespace MODEL;

class Usuario {
    private ?int $id;

    private ?string $username;

    private ?string $senha;

    private ?string $email;

    public function __construct(){} // construtor Não parametrizado
    

    //getters e setters
    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }

    public function getUsername(){
        return $this->username;
    }
    public function setUsername(string $username){
        $this->username = $username;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSenha(string $senha){
        $this->senha = $senha;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }

}
