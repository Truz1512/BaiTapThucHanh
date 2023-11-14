<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
        <?php
            
            $chieucao = $_POST["chieucao"];
            $cannang = $_POST["cannang"];
            $gioitinh = $_POST["gioitinh"];

            if ($gioitinh == "nam" && $chieucao > 160 && $cannang > 50)
            {
                echo "Dat yeu cau vao cong ty";
            }
            else if ($gioitinh == "nu" && $chieucao > 150 && $cannang > 50 && $cannang < 70)
            {
                echo "Dat yeu cau vao cong ty";
            }
            else
            {
                echo "Khong dat yeu cau vao cong ty";
            }
        ?>
    </body>
</html>