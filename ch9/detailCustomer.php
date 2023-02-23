
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require 'connect.php';


?>


<center>
    <?php
        $query = $conn->query("SELECT * FROM tb_customer WHERE cus_id = '".$_REQUEST['cus_id']."' ");
        $fet = $query->fetch_object();
        // echo $fet->cus_name;
        // $sql = "DELETE FROM tb_customer WHERE cus_id = '".$_REQUEST['cus_id']."'  ";
        // $query = $conn->query($sql);
        // if($query){
        //     echo "<script>
        //         alert('บันทึกข้อมูลสำเร็จ');
        //     </script>";
        // }else{
        //     echo "<script>
        //     alert('บันทึกข้อมูลไม่สำเร็จ');
        //     </script>";
        // }

        // mysqli_query($conn, $sql) or die("insert ลงตาราง customer มีข้อผิดพลาดเกิดขึ้น");
        // echo "<br><br><h2>ลบข้อมูลลูกค้าชื่อ".$fet->cus_name."สำเร็จ!!!</h2>"

    ?>
    <table border="1" style="margin-top:50px;">
        <tr>
            <th colspan="2" >ข้อมูลลูกค้า</th>
        </tr>
         <tr>
            <th colspan="2" style="text-align:left; color:red;">*required field</th>
        </tr>
        <tr>
            <td width="150">ชื่อ-นามสกุล :</td>
            <td width="350"><?php echo $fet->cus_name; ?></td>
        </tr>
        <tr>
            <td>ที่อยู่ :</td>
            <td><?php echo $fet->cus_address; ?></td>
        </tr>
        <tr>
            <td>อีเมล : </td>
            <td><?php echo $fet->cus_email; ?></td>
        </tr>
        <tr>
            <td>หมายเลขโทรศัพท์ :</td>
            <td><?php echo $fet->cus_phone; ?></td>
        </tr>
    </table>
    <!-- <button style="margin-top:15px;" onclick=" history.back();">BACK</button> -->
    <a style="margin-top:15px;" href="./listCustomer.php">รายชื่อลูกค้า</a>
    <!-- <input style="margin-top:15px;" type="submit" value="บันทึกข้อมูล">
    <input type="reset" value="ล้างข้อมูล"> -->
</center>
    
</body>
</html>
