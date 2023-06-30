<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="/ClinicaBichoFeliz/materializeButGood.css"></link><!-- Materialize editado-->
    
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script><!-- Inclusão do jQuery-->
    
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script><!-- Inclusão do Plugin jQuery Validation-->

    <title>Inserir Espécie</title>
</head>

<body>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/VIEW/menu.php'; ?>

    <div class="container ">
        <div class="">
            <div class="light-green accent-2 center">
                <br>
                <h1>Inserir Nova Espécie no Sistema</h1>
                <br>
            </div>
            <div class="row light-green lighten-5">
                <form action="recInsEspecie.php" method="POST" id="formInsEspecie">
                    <div class="input-field col s8">
                        <input id="descricao" type="text" class="validate" name="txtDescricao">
                        <label for="descricao" class="black-text bold browser-default">Nome da Espécie</label>
                    </div>

                    <div class="light-green accent-2 center col s12">
                        <br>
                        <button class="green darken-4 waves-effect waves-light btn" type="submit" onclick="return inserir();">Salvar <i class="material-icons">save</i></button>
                        <button class="red darken-4 waves-effect waves-light btn" type="reset">Limpar <i class="material-icons">delete</i></button>
                        <button class="purple darken-4 waves-effect waves-light btn" type="button" onclick="JavaScript:location.href='lstEspecie.php'">Voltar <i class="material-icons">chevron_left</i></button>
                        <br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/VIEW/footer.php'; ?>
    <script>
        $("#formInsEspecie").validate({
            rules: {
                txtDescricao: {
                    required: true,
                    minlength: 1
                },
            },
            messages: {
                txtDescricao: "Insira um nome Válido",
            }
        });
    </script>
</body>

</html>

<script>
    function inserir()
    {
        if(confirm("Depois de Inserida, a Espécie não poderá ser removida. Você tem Certeza?")) return true;
        else return false;
    }
</script>