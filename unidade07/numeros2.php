<?php
    $_salario = 1095;
    $_gasolina = 4.55;
    $_telefone = "3456-0987";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O $_salario e um numero?  " . is_numeric($_salario) ."</br>";
            echo "O $_gasolina e um numero?  " . is_numeric($_gasolina) ."</br>"; 
            echo "O $_telefone e um numero?  " . is_numeric($_telefone) ."</br>";
            
            // testar se é inteiro
            echo "O $_salario e um inteiro?  " . is_int($_salario) ."</br>";
            echo "O $_gasolina e um inteiro?  " . is_int($_gasolina) ."</br>"; 
            echo "O $_telefone e um inteiro?  " . is_int($_telefone) ."</br>";

            // testar se é float
            echo "O $_salario e um racional?  " . is_float($_salario) ."</br>";
            echo "O $_gasolina e um racional?  " . is_float($_gasolina) ."</br>"; 
            echo "O $_telefone e um racional?  " . is_float($_telefone) ."</br>";

        ?>
        
        
    </body>
</html>