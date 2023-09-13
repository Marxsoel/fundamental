<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_day = "Saturday";

            switch ( $_day) {
                case "Sunday":
                    echo "Today is Sunday";
                    break;
                case "Monday":
                    echo "Today is Monday";
                    break;
                case "Tuesday":
                    echo "Today is Tuesday";
                    break;
                case "Wednesday":
                    echo "Today is Wednesday";
                    break;
                case "Thursday":
                    echo "Today is Thursday";
                    break;
                case "Friday":
                    echo "Today is Friday";
                    break;
                default :
                    echo "Today is Saturday";
                    break;
            }
        ?>
    </body>
</html>