<?php
    namespace DAL; //DAL = Data Access Layer. camada para manipulação dos dados
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/DAL/conexao.php'; //continua apenas se o arquivo for incluído. Inclui apenas pela primeira vez, e passa caso já estiver incluído.
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Animal.php';

    class dalAnimal{
        public function Select(){
            $sql = "select * from animal;"; // comando que será mandado ao banco
            
            $pdo = Conexao::conectar();
            //result recebe do Banco de dados a query contida na var sql, que é "select * from animal;"
            $result = $pdo->query($sql); 
            $pdo = Conexao::desconectar();

            foreach($result as $linha){ //para cada elemento na lista result, ou seja, para cada linha na tabela
                $animal = new \MODEL\Animal();

                $animal->setId($linha['id']);
                $animal->setNome($linha['nome']);
                $animal->setEspecie($linha['especie']);
                $animal->setCondicao($linha['condicao']);
                $animal->setDono($linha['dono']);

                $lstAnimal[] = $animal; //insere o animal na array
            }

            return $lstAnimal;
        }

    }
?>