<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1> Aula sobre Vetores </h1>
    <?php
       $vetor = array(85, 54, 76, 15, 3);
       $outrovetor = [1,2,3,4,5];

        for($i=0; $i <=4; $i++){
            echo $vetor[$i]."<br>";
        }


        for($i=0; $i <=4; $i++)
            echo $vetor[$i]."<br>";
        while($i< 4){
            echo "<br>" . $outrovetor[$i];
            $i++;
        }
        
    

        
     ?>
    
</body>
</html>