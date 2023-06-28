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
    }