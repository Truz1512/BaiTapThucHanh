<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $select_year = $_POST['year'];
                echo "Ban da chon nam: $select_year";
            }
        ?>
    </body>
</html>