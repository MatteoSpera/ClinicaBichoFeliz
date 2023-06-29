<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/ClinicaBichoFeliz/BLL/bllEspecie.php';

$id = $_GET['id'];


$bll = new \BLL\bllEspecie();
$especie = $bll->SelectId($id);

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

    <title>Editar Espécie</title>
</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/ClinicaBichoFeliz/VIEW/menu.php'; ?>

    <div class="container light-green lighten-5">
        <div class="center light-green accent-2">
            <br>
            <h1>Editar Especie</h1><br>
        </div>

        <div class="row">
            <form action="recEdtEspecie.php" method="POST" id="formEdtEspecie">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $id; ?></label><br><br>
                    <input type="hidden" name="txtId" value="<?php echo $id; ?>">
                </div>

                <div class="input-field col s8">
                    <input id="descricao" type="text" class="validate" name="txtDescricao" value="<?php echo $especie->getDescricao(); ?>">
                    <label for="descricao" class="black-text bold">Nome da Espécie</label>
                </div>

                <div class="input-field col s8">
                    <input type="hidden" name="txtQuantidade" value="<?php echo $especie->getQuantidade(); ?>">
                </div>

            <div class="light-green accent-2 center col s12">
                <br>
                <button class="green darken-4 waves-effect waves-light btn" type="submit">Salvar <i class="material-icons">save</i></button> 
                <button class="red darken-4 waves-effect waves-light btn" type="button" onclick="limparForm();">Limpar <i class="material-icons">delete</i></button>
                <button class="purple darken-4 waves-effect waves-light btn" type="button" onclick="JavaScript:location.href='lstEspecie.php'">Voltar <i class="material-icons">chevron_left</i></button>
                <br><br>
            </div>
            </form>
        </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/VIEW/footer.php'; ?>

</body>

</html>

<script>
    function limparForm()
    {
        var fields = document.getElementsByTagName('input');
        
        for(let i = 0; i < fields.length; i++)
        {
            if(fields[i].type != 'hidden') 
            fields[i].value = null;
        }
    }
</script>