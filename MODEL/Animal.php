<?php

namespace MODEL;
class Animal {
    // interrogação ? antes do tipo cria variável que pode ser nula
    private ?int $id;
    private ?string $nome;
    private ?int $especie;
    private ?int $condicao;

    public function __construct() // construtor parametrizado
    {
 
    }


    //getters e setters
    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }


    public function getNome(){
        return $this->nome;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }


    public function getEspecie(){
        return $this->especie;
    }
    public function setEspecie(int $especie){
        $this->especie = $especie;
    }

    
    public function getCondicao(){
        return $this->condicao;
    }
    public function setCondicao(int $condicao){
        $this->condicao = $condicao;
    }
}

?>