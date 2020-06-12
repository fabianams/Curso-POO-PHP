<!--
    Usa classe ControleRemoto criada no arquivo ControleRemoto.php

 -->   

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php

    require_once "ControleRemoto.php";
    $c = new ControleRemoto();

    $c->ligarDesligar();

    $c->abrirMenu();

    $c->fecharMenu();

    $c->maisVolume();
   
    $c->playPause();
    
    $c->abrirMenu();


?>
</body>
</html>