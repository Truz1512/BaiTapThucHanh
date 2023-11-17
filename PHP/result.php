<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $USD = 22300;
            $EUR = 27300;
            $SGD = 17000;
            $JPY = 120;
            $amount = $_GET['amount'];
            echo "$amount USD is equal ";
            if ($_GET["currency"] == "USD")
            {
                echo $amount + $USD;
            }
            elseif ($_GET["currency"] == "EUR") {
                echo $amount + $EUR;
            }
            elseif ($_GET["currency"] == "SGD") {
                echo $amount + $SGD;
            }
            else {
                echo $amount + $JPY;
            }
            echo "VND"
        ?>
    </body>
</html>