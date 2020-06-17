
<!--
    Usa classe Aluno criada no arquivo Aluno.php e AlunoBolsista criada no arquivo AlunoBolsista.php

 -->

<!DOCTYPE html>
<html lang="ept-brn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <pre>
    <?php
    require_once "Aluno.php";
    require_once "AlunoBolsista.php";

    $fabi = new Aluno(123456, "Fabiana", 18, "F");
    $ana = new AlunoBolsista(123457, "Ana Maria", 17, "F");
   
    $fabi->receberNota(8.5);
    $fabi->receberNota(8.0);
    $fabi->receberNota(6.5);

    $media = $fabi->mediaNotas();
    echo "</br> Média alcançada por ". $fabi->getNome(). ": ". $media."</br>";

    //print_r($fabi->getNotas());

    $fabi->aprovaReprova();
    echo "</br> Status final de  ". $fabi->getNome(). ": ". $fabi->getStatus()."</br>";

    $fabi->pagarMensalidade("jan");
    $fabi->pagarMensalidade("fev");
    $fabi->pagarMensalidade("mar");
    
    //print_r ($fabi->getMensalidades());
    $ana->receberNota(7.0);
    $ana->receberNota(10.0);
    $ana->receberNota(6.5);

    $ana->aprovaReprova();
    echo "</br> Status final de  ". $ana->getNome(). ": ". $ana->getStatus()."</br>";

    $ana->pagarMensalidade("jan");

    ?>    
    </pre>
</body>
</html>