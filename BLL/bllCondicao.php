<?php
    namespace BLL; 
    use DAL\dalCondicao; 
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/DAL/dalCondicao.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Condicao.php';
    
    class bllCondicao
    {
        public function Select ()
        {
            $dal = new \DAL\dalCondicao(); 
            //A fazer Regras de Negócio
           
            return $dal->Select();
        }

        public function SelectId(int $id)
        {
            $dal = new \DAL\dalCondicao();
            //A fazer Regras de Negócio

            return $dal->SelectId($id);
        }

        public function RefreshId(int $id)
        {
            $dal = new \DAL\dalCondicao(); 
            //A fazer Regras de Negócio
           
            $dal->refreshId($id);
        }

        public function RefreshAll()
        {
            $dal = new \DAL\dalCondicao(); 
            //A fazer Regras de Negócio
           
            $dal->refreshAll();
        }
    }


?>