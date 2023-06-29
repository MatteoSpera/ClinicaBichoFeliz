<?php 
/*Impede a Página de ser acessada caso não haja uma sessão válida */ 
include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/VIEW/login/restrict.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--link para lib de ícones-->

</head>

<body>
    <nav>
    <div class="nav-wrapper white">
      <a href="/ClinicaBichoFeliz/" class="brand-logo right"><img src="/ClinicaBichoFeliz/img/LogoBichoFeliz.png" alt="Site Logo" width="60" height="60"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down ">
        <li><a href="/ClinicaBichoFeliz/VIEW/Animal/lstAnimal.php" class="black-text">Animais</a></li>
        <li><a href="/ClinicaBichoFeliz/VIEW/Especie/lstEspecie.php" class="black-text">Espécies</a></li>
        <li><a href="/ClinicaBichoFeliz/?logout=true" class="black-text">Logout</a></li>
      </ul>
    </div>
  </nav>
</body>

</html>