<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Kiểm tra yêu cầu công ty</title>
    </head>
    <body>
        <h1>Kiểm tra yêu cầu công ty</h1>
        <form action="result.php" method="post">
            <label for="chieucao">Chiều cao: </label>
            <input type="number" name="chieucao"><br>
            <label for="cannang">Cân nặng: </label>
            <input type="number" name="cannang"><br>
            <label for="gioitinh">Giới tính </label>
            <select name="gioitinh">
                <option name="nam">Nam</option>
                <option name="nu">Nữ</option>
            </select><br>
            <input type="submit" value="Kiểm tra">
        </form>
    </body>
</html>