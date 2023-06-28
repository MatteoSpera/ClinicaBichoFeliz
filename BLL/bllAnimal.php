<?php
    namespace BLL; 
    use DAL\dalAnimal; 
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/DAL/dalAnimal.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Animal.php';
    
    class bllAnimal 
    {
        public function Select ()
        {
            $dal = new \Dal\dalAnimal(); 
            //A fazer Regras de Negócio
           
            return $dal->Select();
        }

        public function SelectId(int $id)
        {
            $dal = new \DAL\dalAnimal();
            //A fazer Regras de Negócio

            return $dal->SelectId($id);
        }

        public function Insert(\MODEL\Animal $animal){

            $dal = new \DAL\dalAnimal;
            //inserir regras de negócio aqui


            $dal-> Insert($animal);
            
        }

        public function Update(\MODEL\Animal $animal)
        {
            $dal = new \DAL\dalAnimal;
            //inserir regras de negócio aqui


            $dal-> Update($animal);
        }
    }