<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php                    
            $_megasena = array();
            $_contator = 1;

            while ($_contator < 7) {
                $_sorteio = rand(1,60);
                if ( !in_array($_sorteio, $_megasena)){
                    $_megasena[] = $_sorteio;
                    $_contator ++;
                }
            }

            sort ($_megasena);
        ?>

        <pre>
            <?php print_r($_megasena) ?>            
        </pre>
    </body>
</html>