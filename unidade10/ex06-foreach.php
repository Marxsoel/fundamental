<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_agenda = array(   "Nome" => "Marxsoel",
                            "Telefone" => "62999999999",
                            "Salario" => 7000.50,
                            "Fumante" => false);

        foreach ($_agenda as $_contatos => $_valor) {
            echo $_contatos . ": " . $_valor . "<br>";
        }
    ?>
</body>
</html>