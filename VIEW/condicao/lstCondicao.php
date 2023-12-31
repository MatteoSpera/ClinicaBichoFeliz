<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/BLL/bllCondicao.php'; 
use BLL\bllCondicao;
$bll = new \BLL\bllCondicao();

$bll->refreshAll();

$lstCondicao = $bll->Select();

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


    <title>Condições</title>
</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/ClinicaBichoFeliz/VIEW/menu.php'; ?>

    <div class="container">
        <h1>Relatório de Condições de Pacientes</h1><br>
        <a class="waves-effect waves-light btn-large light-blue accent-3" href="javascript:location.reload();"><i class="material-icons left">refresh</i>Atualizar</a><br><br>

        <table class="striped light-green lighten-3">


            <tr>
                <th>ID</th>
                <th>Condição</th>
                <th>Quantidade</th>
            </tr>
            <?php

            // para cada pet na lista, cria uma nova linha na tabela html
            foreach ($lstCondicao as $condicao) { // foreach abre dentro de uma tag e fecha na outra

            ?>

                <tr>
                    <td><?php echo $condicao->getId(); ?></td>
                    <td><?php echo $condicao->getDescricao(); ?></td>
                    <td><?php echo $condicao->getQuantidade(); ?></td>
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