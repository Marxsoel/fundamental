<?php
    $_fumante = true;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "E fumante? " . $_fumante . "<br>";
            echo "E booleana? " . is_bool($_fumante) . "<br>";
        ?>
    </body>
</html>