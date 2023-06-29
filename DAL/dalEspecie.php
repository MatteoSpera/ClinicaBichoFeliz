<?php
    namespace DAL; 
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/DAL/conexao.php'; 
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Especie.php';

    class dalEspecie
    {
        public function Select()
        {
            $sql = "select * from especie;"; // comando que será mandado ao banco
            
            $pdo = Conexao::conectar();
            $result = $pdo->query($sql); 
            $pdo = Conexao::desconectar();

            foreach($result as $linha){ //para cada elemento na lista result, ou seja, para cada linha na tabela
                $especie = new \MODEL\Especie();

                $especie->setId($linha['id']);
                $especie->setDescricao($linha['descricao']);
                $especie->setQuantidade($linha['quantidade']);

                $lstEspecie[] = $especie; 
            }

            return $lstEspecie;
        }

        public function SelectId(int $id)
        {
            $sql = "select * from especie where id=?";

            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute(array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            if ($linha != null)
            {
                $especie = new \MODEL\Especie();
                $especie->setId($id);
                $especie->setDescricao($linha['descricao']);
                $especie->setQuantidade($linha['quantidade']);
                
            } else return null; // caso não seja encontrado, especie será nula

            return $especie;

        }

        public function RefreshId(int $id)
        {
            $sql = "select count(*) from animal where especie=".$id.";";
            $pdo = Conexao::conectar();
            $query = $pdo->query($sql); //Isso é um pdo statement, como se fosse uma tabela

            $result = $query->fetchAll(); //fetchall retorna uma array de arrays onde cada elemento é uma linha da tabela.
            //neste caso só tem um elemento (array)
            //a contagem que Queremos se encontra no elemento de índice "count(*)" da array de índice 0 de result

            $quant = $result[0]['count(*)'];
            
            
           
            $sql = "UPDATE especie SET quantidade=? WHERE id=?";
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $query = $pdo->prepare($sql);
            $query->execute(array($quant, $id));
            
            $pdo = Conexao::desconectar();

        }

        public function RefreshAll()
        {
            $lstEspecie = $this->Select();
            foreach($lstEspecie as $especie) $this->RefreshId($especie->getId());

        }
    }

?>