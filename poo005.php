<!--
    Usa classe Livro e Pessoa criadas nos arquivos Livro.php e Leitor.php

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

    require_once "Livro.php";
    require_once "Leitor.php";

        $leitor[0]= new Leitor("Pedro", 22, "M");
        $leitor[1]= new Leitor("Maria", 31, "F");

        $livro[0] = new Livro("PHP Básico", "Zé das Couves", 100, $leitor[0]);
        $livro[1] = new Livro("POO com PHP", "Maria do Socorro", 350, $leitor[0]);
        $livro[2] = new Livro("PHP & MariaDB", "Guru do PHP", 800, $leitor[1]);

        $livro[0]->detalhes();

        $livro[0]->abrir();
        
        $livro[0]->folhear(50);
        $livro[0]->avancarPag();
        //$livro[0]->fechar();
        $livro[0]->detalhes();
        //$livro[0]->avancarPag();   
        $livro[0]->voltarPag();
        $livro[0]->detalhes();

     ?>
     </pre>
 </body>
 </html>