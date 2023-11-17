<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Kiem tra nang luc hoc</title>
    </head>
    <body>
        <h1>Kiem tra nang luc hoc</h1>
        <form action="result.php" method="get">
            <label for="toan">Toan: </label>
            <input type="number" name="toan" min="0" max="10" required><br>
            <label for="ly">Ly: </label>
            <input type="number" name="ly" min="0" max="10" required><br>
            <label for="hoa">Hoa: </label>
            <input type="number" name="hoa" min="0" max="10" required><br>
            <label for="anh">Anh: </label>
            <input type="number" name="anh" min="0" max="10" required><br>
            <label for="van">Van: </label>
            <input type="number" name="van" min="0" max="10" required><br>
            <label for="lic su">Lich su: </label>
            <input type="number" name="lichsu" min="0" max="10" required><br>
            <input type="submit" value="Kiểm tra">
        </form>
    </body>
</html>