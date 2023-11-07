<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
        <form action= "7-CalResult.php" method="get">
            <p>First Number: </p>
            <input type="number" name = "firstNumber"><br>
            <p>Second Number: </p>
            <input type="number" name = "secondNumber"><br>
            <p></p>
            <input type="submit" value="Add">

            Result:
            <?php
                $result = $_GET["firstNumber"] + $_GET["secondNumber"];
                echo $result;
            ?>
        </form>
    </body>
</html>