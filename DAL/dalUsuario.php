<?php
    namespace DAL; //DAL = Data Access Layer. camada para manipulação dos dados
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/DAL/conexao.php'; //continua apenas se o arquivo for incluído. Inclui apenas pela primeira vez, e passa caso já estiver incluído.
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Usuario.php';

    class dalUsuario{
        public function SelectUsername(string $username){
            $sql = "select * from usuario where username LIKE ?;"; // comando que será mandado ao banco
            
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute(array($username)); 
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $pdo = Conexao::desconectar();
            
            $usuario = new \MODEL\Usuario();
            if ($linha != null)
            {
                $usuario->setId($linha['id']);
                $usuario->setUsername($linha['username']);
                $usuario->setSenha($linha['senha']);
                $usuario->setEmail($linha['email']);
            } else return null; // caso não seja encontrado, usuario será nulo

            return $usuario;
        }

        public function SelectId(int $id){
            $sql = "select * from usuario where id=?;";
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute(array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $usuario = new \MODEL\Usuario();
            if ($linha != null)
            {
                $usuario->setId($linha['id']);
                $usuario->setUsername($linha['username']);
                $usuario->setSenha($linha['senha']);
                $usuario->setEmail($linha['email']);
            } else return null; // caso não seja encontrado, usuario será nulo
            
            return $usuario;
        }

        
    }
?>