<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area</title>
</head>

<body>

    <center>

        <h1>การคำนวณพื้นที่</h1><br>

        <form action="cal_mid_01.php" method="post">
            <input type="number" name="high" required ><br>
            <input type="number" name="wide" required ><br>
            <input style="margin-top: 10px;" type="radio" name="type" value="square">สี่เหลี่ยมจตุรัส <br>
            <input type="radio" name="type" value="rectangle">สี่เหลี่ยมผืนผ้า <br>
            <input type="radio" name="type" value="rhombus">สี่เหลี่ยมขนมเปียกปูน <br>
            <input type="radio" name="type" value="triangle">สามเหลี่ยม<br>
            <input type="submit" name="">
            <input type="reset" name="">
        </form>
    </center>



</body>

</html>