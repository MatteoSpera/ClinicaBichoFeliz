<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/BLL/bllAnimal.php';

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
        
    <title>Editar Animal</title>
</head>
<body>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/VIEW/menu.php'; ?>

    <div class="container light-green lighten-5">
        <div class="center light-green accent-2">
            <br><h1>Editar Animal</h1><br>
    
        </div>

        <div class="row">
            <form action="recEdtAnimal.php" method="POST" id="formEdtAnimal"> <!--recEdtAnimal = receber e editar animal-->
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $id; ?></label><br> <!--Não precisa de GetId pois já foi informado antes-->
                    <input type="hidden" name="txtId" value="<?php echo $id; ?>">
                </div>

                <div class="input-field col s8">
                    <input id="nome" type="text" class="validate" name="txtNome" value="<?php echo $animal->getNome(); ?>"> <!--Substitui o valor padrão pelo valor já existente do Animal-->
                    <label for="nome" class="black-text bold">Nome</label>
                </div>
                
                <div class="input-field col s8">
                        <input id="especie" type="text" class="validate" name="txtEspecie" value="<?php echo $animal->getEspecie(); ?>">
                        <label for="especie" class="black-text bold">ID da Espécie</label>
                    </div>

                    <div class="input-field col s8">
                        <input id="condicao" type="text" class="validate" name="txtCondicao" value="<?php echo $animal->getCondicao(); ?>">
                        <label for="condicao" class="black-text bold">ID da Condição</label>
                    </div>

                    <div class="input-field col s8">
                        <input id="dono" type="text" class="validate" name="txtDono" value="<?php echo $animal->getDono(); ?>">
                        <label for="dono" class="black-text bold">ID do Dono</label>
                    </div>

                <div class="light-green accent-2 center col s12">
                    <br>
                    <button class="green darken-4 waves-effect waves-light btn" type="submit">Salvar <i class="material-icons">save</i></button> <!--Ao salvar, manda para recEdtAnimal-->
                    <button class="red darken-4 waves-effect waves-light btn" type="reset">Limpar <i class="material-icons">delete</i></button>
                    <button class="purple darken-4 waves-effect waves-light btn" type="button" onclick="JavaScript:location.href='lstAnimal.php'">Voltar <i class="material-icons">chevron_left</i></button>
                    <br><br>
                </div>
            </form>
        </div>

    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/VIEW/footer.php'; ?>

</body>
</html>