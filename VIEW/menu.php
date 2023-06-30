<?php 
/*Impede a Página de ser acessada caso não haja uma sessão válida */ 
include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/VIEW/login/restrict.php'; ?>

<?php
  $usuario = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/ClinicaBichoFeliz/materializeButGood.css"></link> <!-- Materialize editado-->
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--link para lib de ícones-->

</head>

<body>
    <nav>
    <div class="nav-wrapper white">
    <a href="/ClinicaBichoFeliz/" class="brand-logo center"><img src="/ClinicaBichoFeliz/img/LogoBichoFeliz.png" alt="Site Logo" width="60" height="60"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down ">
        <li><a href="/ClinicaBichoFeliz/" class="black-text">Home</a></li>
        <li><a href="/ClinicaBichoFeliz/VIEW/Animal/lstAnimal.php" class="black-text">Animais</a></li>
        <li><a href="/ClinicaBichoFeliz/VIEW/Especie/lstEspecie.php" class="black-text">Espécies</a></li>
        <li><a href="/ClinicaBichoFeliz/VIEW/Condicao/lstCondicao.php" class="black-text">Condições</a></li>
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down ">
        <li><a class="waves-effect waves-light btn black white-text" href="/ClinicaBichoFeliz/?logout=true"><i class="material-icons right">logout</i><?php echo $usuario; ?></a></li>
      </ul>
    </div>
  </nav>
</body>

</html>