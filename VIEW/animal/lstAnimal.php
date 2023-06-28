<?php
    use BLL\bllOperador;

    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/BLL/bllAnimal.php'; 

    $bll = new \BLL\bllAnimal();

    $lstAnimal = $bll->Select();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--link para lib de ícones-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Listar Animais</title>
</head>
<body>
    <div class="container">
        <h1>Listar Pets Cadastrados no Sistema</h1>

        <table class="striped grey lighten-2">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Condição</th>
            </tr>

            <?php 
            
            // para cada pet na lista, cria uma nova linha na tabela html
            foreach($lstAnimal as $animal){ // foreach abre dentro de uma tag e fecha na outra

            ?>
                <tr>
                    <td><?php echo $animal->getId(); ?></td>
                    <td><?php echo $animal->getNome(); ?></td>
                    <td><?php echo $animal->getEspecie(); ?></td>
                    <td><?php echo $animal->getCondicao(); ?></td>
                </tr>
            <?php
            } // <--- Chave de fechamento do Foreach
            ?>
            
        </table>
    </div>
</body>
</html>