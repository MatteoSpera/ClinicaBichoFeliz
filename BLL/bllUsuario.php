<?php
    namespace BLL; 
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/DAL/dalUsuario.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Usuario.php';
    
    class bllUsuario {
        public function SelectUsername (string $username){
            $dal = new \DAL\dalUsuario(); 
            //linhas de código com regras de negócio
           
            return $dal->SelectUsername($username);
        }

        public function SelectId (int $id){
            $dal = new \DAL\dalUsuario;
            //inserir regras de negócio aqui

            return $dal->SelectId($id);
        }

    }
