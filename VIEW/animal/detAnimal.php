<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/ClinicaBichoFeliz/BLL/bllAnimal.php';

$id = $_GET['id']; //$_GET é a variável que contém as infos recebidas através do método GET


$bll = new \BLL\bllAnimal();
$animal = $bll->SelectId($id); //cria cópia do animal buscando na lista pelo Id recebido por GET

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="remover.js"></script><!-- script para remover animal -->

    <title>Detalhes do Animal</title>
</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/VIEW/menu.php'; ?>

    <div class="container green lighten-5">
        <div class="center light-green accent-2">
            <br>
            <h1>Detalhes do Animal</h1><br>

        </div>

        <div class="row">
            <div class="container">
                <label for="id" class="black-text bold">
                    <h5>ID: <?php echo $animal->getId(); ?></h5>
                </label>
                <input type="hidden" name="txtId" value="<?php echo $animal->getId(); ?>">

                <label for="nome" class="black-text bold">
                    <h5>Nome: <?php echo $animal->getNome(); ?></h5>
                </label>

                <label for="especie" class="black-text bold">
                    <h5>Espécie: <?php echo $animal->getEspecie(); ?></h5>
                </label>

                <label for="condicao" class="black-text bold">
                    <h5>Condição: <?php echo $animal->getCondicao(); ?></h5>
                </label>

                <label for="dono" class="black-text bold">
                    <h5>Dono: <?php echo $animal->getDono(); ?></h5>
                </label>


            </div>
        </div>
        <div class="light-green accent-2 center col s12">
            <br>
            <button class="green darken-4 waves-effect waves-light btn" type="button" 
            onclick="JavaScript:location.href='edtAnimal.php?id='+<?php echo $animal->getId(); ?>">Editar <i class="material-icons">edit</i></button>

            <button class="red darken-4 waves-effect waves-light btn" type="button" 
            onclick="JavaScript:remover(<?php echo $animal->getId();?>, '<?php echo $animal->getNome();?>')">Deletar <i class="material-icons">delete</i></button>

            <button class="purple darken-4 waves-effect waves-light btn" type="button" 
            onclick="JavaScript:location.href='lstAnimal.php'">Voltar <i class="material-icons">chevron_left</i></button>
            <br><br>
        </div>

    </div>

</body>

</html>