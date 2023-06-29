<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/BLL/bllEspecie.php'; 
use BLL\bllEspecie;
$bll = new \BLL\bllEspecie();

$bll->refreshAll();

$lstEspecie = $bll->Select();

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


    <title>Espécies</title>
</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/ClinicaBichoFeliz/VIEW/menu.php'; ?>

    <div class="container">
        <h1>Relatório de Espécies de Pacientes</h1><br>
        <h5>

            <a class="waves-effect waves-light btn-large light-blue accent-3" href="javascript:location.reload();"><i class="material-icons left">refresh</i>Atualizar</a>
            <a class="waves-effect waves-light btn-large red accent-3" href="insEspecie.php"><i class="material-icons left">add</i>Inserir</a>
            <br><br>
        </h5>

        <table class="striped light-green lighten-3">


            <tr>
                <th>ID</th>
                <th>Espécie</th>
                <th>Quantidade</th>
            </tr>
            <?php

            // para cada pet na lista, cria uma nova linha na tabela html
            foreach ($lstEspecie as $especie) { // foreach abre dentro de uma tag e fecha na outra

            ?>

                <tr>
                    <td><?php echo $especie->getId(); ?></td>
                    <td><?php echo $especie->getDescricao(); ?></td>
                    <td><?php echo $especie->getQuantidade(); ?></td>
                </tr>
            <?php
            } // <--- Chave de fechamento do Foreach
            ?>

        </table>
    </div>
    <br><br>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/ClinicaBichoFeliz/VIEW/footer.php'; ?>

</body>

</html>