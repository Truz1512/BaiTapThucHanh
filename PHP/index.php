<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $currency = $_GET['currency'];
            echo "$amount $currency is equal ";
            switch (%$currency) {
                case "USD":
                    echo $amount * $USD;
                    break;
                case "EUR":
                    echo $amount * $EUR;
                    break;
                case "SGD":
                    echo $amount * $SGD;
                    break;
                case "JPY":
                    echo $amount * $JPY;
                    break;
            }
        ?>
    </body>
</html>