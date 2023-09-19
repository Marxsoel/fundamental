<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        <?php
           $_data1 = new DateTime('2025-01-01');
           $_data2 = new DateTime('2023-9-20');
           $_intervalo = $_data1 -> diff($_data2);

        ?>

        <pre>
            <?php
                print_r($_intervalo);
            ?>
        </pre>

        <pre>
            <?php
                print_r($_intervalo ->format('%r%a'));
            ?>
        </pre>
    <body>
    </body>
</html>