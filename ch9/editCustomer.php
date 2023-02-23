<?php
    require 'connect.php';
    $fet = $conn->query("SELECT * FROM tb_customer WHERE cus_id = '".$_REQUEST['cus_id']."' ")->fetch_object();
?>

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
    <form action="api/apiEditCustomer.php?cus_id=<?php echo $_REQUEST['cus_id'] ?>" method="post">
    <table border="1"  style="margin-top:50px;">
        <tr>
            <th colspan="2" >แก้ไขข้อมูลลูกค้า</th>
        </tr>
         <tr>
            <th colspan="2" style="text-align:left; color:red;">*required field</th>
        </tr>
        <tr>
            <td width="150">ชื่อ-นามสกุล :</td>
            <td width="450"><input placeholder="ชื่อ - สกุล" type="text" name="name" id="" size="50" minlength="4" required value="<?php echo $fet->cus_name ?>"></td>
        </tr>
        <tr>
            <td>ที่อยู่ :</td>
            <td style="color:red;"><textarea name="address" id="" cols="50" rows="5" required>
            <?php echo $fet->cus_address ?>
            </textarea>*</td>
        </tr>
        <tr>
            <td>อีเมล : </td>
            <td><input type="email" name="email" id=""placeholder="email" required value="<?php echo $fet->cus_email ?>"></td>
        </tr>
        <tr>
            <td>หมายเลขโทรศัพท์ :</td>
            <td><input type="text" name="phone" minlength="10" id="" required value="<?php echo $fet->cus_phone ?>"></td>
        </tr>
    </table>

    <input style="margin-top:15px;" type="submit" value="บันทึกข้อมูล">
    <input type="reset" value="ล้างข้อมูล">
    <a href="./listCustomer.php">รายชื่อลูกค้า</a>
    </form>
</center>
    
</body>
</html>
<script>
    
</script>