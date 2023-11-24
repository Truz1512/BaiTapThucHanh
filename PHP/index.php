<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Date</title>
    </head>
    <body>
        <h1>Date</h1>
        <form action="result.php" method="post">
            <lable for="">Ngay: </lable>
            <select name="date" id="date">
                <?php
                    $today = getdate();
                    $current_date = $today['date'];
                    for ($date = 1; $date <= 30; $date++){
                        echo "<option value=\"$date\">$date</option>";
                    }   
                    ?>
            </select>
            <lable for="">Thang: </lable>
            <select name="month" id="month">
                <?php
                    $today = getdate();
                    $current_month = $today['month'];
                    for ($month = 1; $month <= 12; $month++){
                        echo "<option value=\"$month\">$month</option>";
                    }   
                    ?>
            </select>
            <lable for="">Nam: </lable>
            <select name="year" id="year">
                <?php
                    $today = getdate();
                    $current_year = $today['year'];
                    for ($year = 1990; $year <= $current_year; $year++){
                        echo "<option value=\"$year\">$year</option>";
                    }   
                    ?>
            </select>
            <input type="submit" name="submit" value="In">
        </form>
    </body>
</html>