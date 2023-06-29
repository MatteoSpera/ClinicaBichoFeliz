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

    <title>Login</title>
</head>

<body>

    <div class="row valign-wrapper" style="height: 90vh;">
        <div class="col s12 m6 offset-m3 center">
            <div class="card">

                <div class="card-action light-green darken-1 white-text">
                    <img src="/ClinicaBichoFeliz/img/LogoBichoFeliz.png" alt="" class="circle responsive-img" width="250px">
                    <h3>Fazer Login</h3>
                </div>

                <div class="card-content">
                    <form class="center" action="/ClinicaBichoFeliz/VIEW/login/recLogin.php" method="post">
                        <?php if(isset($_GET['error']) and $_GET['error'] == 'userNotFound')
                        {
                            echo "<h5>Usuário não encontrado!</h5>";
                        } else if(isset($_GET['error']) and $_GET['error'] == 'wrongPassword')
                        {
                            echo "<h5>Senha Incorreta!</h5>";
                        }?>
                        <div class="input-field s8">
                            <i class="material-icons iconis prefix">account_circle</i>
                            <input id="icon_prefix" type="text" name="username" class="validate">
                            <label for="icon_prefix">Usuário</label>
                        </div>

                        <div class="input-field s8">
                            <i class="material-icons iconis prefix">vpn_key</i>
                            <input id="password" type="password" name="senha" class="validate">
                            <label for="password">Senha</label>
                        </div>


                        <button class="btn-large waves-effect waves-dark btn light-green darken-1" type="submit" style="width:70%; height: 50px;">Login</button>
                        <br><br>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/ClinicaBichoFeliz/VIEW/footer.php'; ?>


</body>

</html>