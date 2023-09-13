<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_a = 5;
            $_b = 5;

            if ( $_a > $_b) {
                echo "(A) is greater than (B)";
            } else if ($_a < $_b) {
                echo "(a) is less than (b)";
            } else {
                echo "(a) is equal than (b)";
            }
        ?>
    </body>
</html>