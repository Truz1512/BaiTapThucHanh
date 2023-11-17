<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $toan = $_GET["toan"];
                $ly = $_GET["ly"];
                $hoa = $_GET["hoa"];
                $anh = $_GET["anh"];
                $van = $_GET["van"];
                $lichsu = $_GET["lichsu"];
                $sum = $toan + $ly + $hoa +$anh +$van +$lichsu;
                $count = 6;
                $diemtb = $sum / $count;
                echo "Diem trung binh la: " . $diemtb ." <br>";
            }
            if ($toan > 4 && $ly > 4 && $hoa > 4 && $anh >4 && $van >4 && $su > 4) {
                if ($diemtb <5)
                    echo "Hoc sinh yeu";
                else if ($diemtb >=5 && $diemtb <=6.4)
                    echo "Hoc sinh trung binh";
                else if ($diemtb >=6.5 && $diemtb <=7.9)
                    echo "Hoc sinh kha";
                else
                echo "Hoc sinh gioi";
            }
            else
            echo "Hoc sinh yeu";
        ?>
    </body>
</html>