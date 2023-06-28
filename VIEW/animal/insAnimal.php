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

    <title>Cadastrar Animal</title>
</head>

<body>
    <div class="container ">
        <div class="center">
            <div class="light-green accent-2">
                <br>
                <h1>Cadastrar Pet na Clínica</h1>
                <br>
            </div>
            <div class="row grey lighten-4">
                <form action="recInsAnimal.php" method="POST" id="formInsAnimal"> <!--RecInsAnimal = receber e inserir animal-->
                    <div class="input-field col s8">
                        <input id="nome" type="text" class="validate" name="txtNome">
                        <label for="nome" class="black-text bold">Nome</label>
                    </div>

                    <div class="input-field col s8">
                        <input id="especie" type="text" class="validate" name="txtEspecie">
                        <label for="especie" class="black-text bold">ID da Espécie</label>
                    </div>

                    <div class="input-field col s8">
                        <input id="condicao" type="text" class="validate" name="txtCondicao">
                        <label for="condicao" class="black-text bold">ID da Condição</label>
                    </div>

                    <div class="input-field col s8">
                        <input id="dono" type="text" class="validate" name="txtDono">
                        <label for="dono" class="black-text bold">ID do Dono</label>
                    </div>


                    <div class="light-green accent-2 center col s12">
                        <br>
                        <button class="green darken-4 waves-effect waves-light btn" type="submit">Salvar <i class="material-icons">save</i></button>
                        <button class="red darken-4 waves-effect waves-light btn" type="reset">Limpar <i class="material-icons">delete</i></button>
                        <button class="purple darken-4 waves-effect waves-light btn" type="button" onclick="JavaScript:location.href='lstAnimal.php'">Voltar <i class="material-icons">chevron_left</i></button>
                        <br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>