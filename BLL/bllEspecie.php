<?php
    namespace BLL; 
    use DAL\dalEspecie; 
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/DAL/dalEspecie.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Especie.php';
    
    class bllEspecie
    {
        public function Select ()
        {
            $dal = new \DAL\dalEspecie(); 
            //A fazer Regras de Negócio
           
            return $dal->Select();
        }

        public function SelectId(int $id)
        {
            $dal = new \DAL\dalEspecie();
            //A fazer Regras de Negócio

            return $dal->SelectId($id);
        }

        public function RefreshId(int $id)
        {
            $dal = new \DAL\dalEspecie(); 
            //A fazer Regras de Negócio
           
            $dal->refreshId($id);
        }

        public function RefreshAll()
        {
            $dal = new \DAL\dalEspecie(); 
            //A fazer Regras de Negócio
           
            $dal->refreshAll();
        }
        
        public function Insert(\MODEL\Especie $especie){

            $dal = new \DAL\dalEspecie;
            //inserir regras de negócio aqui


            $dal-> Insert($especie);
            
        }

        public function Update(\MODEL\Especie $especie)
        {
            $dal = new \DAL\dalEspecie;
            //inserir regras de negócio aqui


            $dal-> Update($especie);
        }
    }


?>