<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $tongdiem = $_GET["toan"] + $_GET["ly"] + $_GET["hoa"];
            echo "Tong diem: " .$tongdiem;
            if ($tongdiem >= 18 && $tongdiem < 22)
            {
                echo " Ban dau CNTT, KHDL, Dia chat, Moi truong";
            }
            else if ($tongdiem >= 22)
            {
                echo " Ban dau CNTT chat luong cao, CNTT, KHDL, Dia chat, Moi truong";
            }
            else if ($tongdiem >= 17 && $tongdiem < 18)
            {
                echo " Ban dau Dia chat, Moi truong";
            }
            else if ($tongdiem >=15 && $tongdiem < 17)
            {
                echo " Ban dau Moi truong";
            }
            else {
                echo " Ban ko dau";
            }
        ?>
    </body>
</html>