<!--
    Usa classe caneta criada no arquivo ContaBancaria.php

 -->  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <pre>
    <?php
        require_once "ContaBancaria.php";

        $creusa = new ContaBancaria();
        $jubileu = new ContaBancaria();

        $creusa->abrirConta("Creusa", 2222, "CC", 500.00, "aberta");
        $jubileu->abrirConta("Jubileu", 1111, "CP", 300.00, "aberta");
        
        var_dump($creusa);
        var_dump($jubileu);

        $creusa->sacar(100.00);
        $creusa->depositar(50.00);

        $creusa->pagarMensal();
        $jubileu->pagarMensal();

        $creusa->getSaldo();
        echo "</br> </br>";
        $jubileu->getSaldo();

        var_dump($creusa);
        var_dump($jubileu);
    ?>
    </pre>
</body>
</html>