
<?php

    $str = "in ra co bao nhieu chu h trong chuoi";
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == 'h') {
            $count++;
        }
    }
    echo "Chuoi tren co " . $count. " chu 'h'";
?>