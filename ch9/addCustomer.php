<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>
    <form action="api/apiAddCustomer.php" method="post">
    <table border="1"  style="margin-top:50px;">
        <tr>
            <th colspan="2" >เพิ่มข้อมูลลูกค้า</th>
        </tr>
         <tr>
            <th colspan="2" style="text-align:left; color:red;">*required field</th>
        </tr>
        <tr>
            <td width="150">ชื่อ-นามสกุล :</td>
            <td width="450"><input placeholder="ชื่อ - สกุล" type="text" name="name" id="" size="50" minlength="4" required></td>
        </tr>
        <tr>
            <td>ที่อยู่ :</td>
            <td style="color:red;"><textarea name="address" id="" cols="50" rows="5" required></textarea>*</td>
        </tr>
        <tr>
            <td>อีเมล : </td>
            <td><input type="email" name="email" id=""placeholder="email" required></td>
        </tr>
        <tr>
            <td>หมายเลขโทรศัพท์ :</td>
            <td><input type="text" name="phone" minlength="10" id="" required></td>
        </tr>
    </table>

    <input style="margin-top:15px;" type="submit" value="บันทึกข้อมูล">
    <input type="reset" value="ล้างข้อมูล">
    </form>
</center>
    
</body>
</html>
<script>
    
</script>