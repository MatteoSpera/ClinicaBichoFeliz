<?php
    namespace DAL; 
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/DAL/conexao.php'; 
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Condicao.php';

    class dalCondicao
    {
        public function Select()
        {
            $sql = "select * from condicao;"; 
            
            $pdo = Conexao::conectar();
            $result = $pdo->query($sql); 
            $pdo = Conexao::desconectar();

            foreach($result as $linha){ //para cada elemento na lista result, ou seja, para cada linha na tabela
                $condicao = new \MODEL\Condicao();

                $condicao->setId($linha['id']);
                $condicao->setDescricao($linha['descricao']);
                $condicao->setQuantidade($linha['quantidade']);

                $lstCondicao[] = $condicao; 
            }

            return $lstCondicao;
        }

        public function SelectId(int $id)
        {
            $sql = "select * from condicao where id=?";

            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute(array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            if ($linha != null)
            {
                $condicao = new \MODEL\Condicao();
                $condicao->setId($id);
                $condicao->setDescricao($linha['descricao']);
                $condicao->setQuantidade($linha['quantidade']);
                
            } else return null; // caso não seja encontrado, condicao será nula

            return $condicao;

        }

        public function RefreshId(int $id)
        {
            $sql = "select count(*) from animal where condicao=".$id.";";
            $pdo = Conexao::conectar();
            $query = $pdo->query($sql); //Isso é um pdo statement, como se fosse uma tabela

            $result = $query->fetchAll(); //fetchall retorna uma array de arrays onde cada elemento é uma linha da tabela.
            //neste caso só tem um elemento (array)
            //a contagem que Queremos se encontra no elemento de índice "count(*)" da array de índice 0 de result

            $quant = $result[0]['count(*)'];
            
            
           
            $sql = "UPDATE condicao SET quantidade=? WHERE id=?";
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $query = $pdo->prepare($sql);
            $query->execute(array($quant, $id));
            
            $pdo = Conexao::desconectar();

        }

        public function RefreshAll()
        {
            $lstCondicao = $this->Select();
            foreach($lstCondicao as $condicao) $this->RefreshId($condicao->getId());

        }
    }

?>