<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1> Atividade 1 </h1>

    <?php
     print('Crie um vetor de 10 números. Mostre os números e o somatório destes na tela'.'<br>');

     $vetor = array( 7, 17, 27, 37, 47, 57, 67, 77, 87, 97);
     $outrovetor = [1,2,3,4,5,6,7,8,9];
     $soma=0;
    
     for($i=0; $i <=9; $i++){
        echo $vetor[$i]."<br>";

        $soma += $vetor[$i];
     }
     echo $soma."<br>";

    ?>


    <h1> Atividade 2 </h1>

     <?php
     print('Crie um vetor com 5 nomes, exiba a  lista desses nomes na tela'.'<br>');

     $vetor = array('Giovanna', 'Vitória', 'Gabriel', 'Gustavo', 'Mateus');

     
     for($i=0; $i <=4; $i++){
            echo $vetor[$i]."<br>";
        }
    ?>

    <h1> Atividade 3 </h1>
    <?php

    ?>
</body>
</html>