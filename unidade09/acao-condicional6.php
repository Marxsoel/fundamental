<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_idade = 30;
            $_sexo = "feminino";

            if ($_idade >= 18 && $_sexo == "feminino") {
                echo "Pode entrar na festa";
            } else {
                echo "Nao pode entrar na festa";
            }
        ?>
    </body>
</html>