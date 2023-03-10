<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Números pares de 0 a 500</title>
    </head>
    <body>
        <h1>Números pares de 0 a 500</h1>
        <?php
            for ($par=0; $par <=500; $par++) {
                if (($par % 2 == 1) and ($par < 500)){
                    continue;
                }elseif ($par <=500) {
                    echo $par . " - ";
                }else{
                    break;
                }
            }
        ?>
    </body>
</html>