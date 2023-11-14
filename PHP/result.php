<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
        <?php
            
            if ($_GET["ngoaite"] == "USD")
            {
                $result = $_GET["soluong"] * 23000;
                echo $result;
            }
            else if ($_GET["ngoaite"] == "AUD")
            {
                $result = $_GET["soluong"] * 17000;
                echo $result;
            }
            else if ($_GET["ngoaite"] == "JPY")
            {
                $result = $_GET["soluong"] * 200;
                echo $result;
            }
            else 
            {
                $result = $_GET["soluong"] * 27000;
                echo $result;
            }
        ?>
    </body>
</html>