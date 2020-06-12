<!--
    Usa classe caneta criada no arquivo Caneta.php

 -->   

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<pre>
    <?php
        require_once "Caneta.php";
    
        $caneta1 = new Caneta ();
        echo ("Caneta construida inicial:</br>");
        var_dump($caneta1);

        $caneta1->setCaneta("Compactor PILOT", "preta", 0.7, 90, 1);
        echo "</br>";
        echo "Depois do setCaneta: </br>";
        var_dump($caneta1);

        echo "</br>";
        $caneta1->setTampa(0);
        $caneta1->rabiscar();

        echo "Depois de rabiscar: </br>";
        var_dump($caneta1);
        
    ?>
</pre>
</body>
</html>