<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

require '../connect.php';
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['phone'];
$check = "^/[กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรฤฤลวศษสหฬอฮุูึั้ี่ิื์็๋๊ํ]/";
    if(empty(trim($name)) || empty(trim($email)) || empty(trim($address)) || empty(trim($phone)) ){
        echo "<script>
        alert('กรุณากรอกข้อมูลให้ตครบถ้วน');
        history.back();
    </script>";
    exit();

    }
    // if(!preg_filter($check,$name)){
    //         exit();


    // }else
     if(!filter_var(trim($email),FILTER_VALIDATE_EMAIL)){
        echo "<script>
        alert('$email is not a valid');
        history.back();
    </script>";
    exit();
    }else if(!ctype_digit(trim($phone))){
        echo "<script>
        alert('$phone is not a phone number');
        history.back();
    </script>";
    exit();
    }

?>


<center>
    <?php
        $query = $conn->query("SELECT * FROM tb_customer");
        $fet = $query->fetch_object();
        echo $fet->cus_name;
        $sql = "INSERT INTO tb_customer(cus_name, cus_address, cus_email, cus_phone) 
        VALUES('".$name."','".$address."', '".$email."', '".$phone."') ";
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

        mysqli_query($conn, $sql) or die("insert ลงตาราง customer มีข้อผิดพลาดเกิดขึ้น");
        echo "<br><br><h2>บันทึกข้อมูลลูกค้าชื่อ".$name."สำเร็จ!!!</h2>"

    ?>
    <form action="" method="post">
    <table border="1" style="margin-top:50px;">
        <tr>
            <th colspan="2" >ข้อมูลลูกค้า</th>
        </tr>
         <tr>
            <th colspan="2" style="text-align:left; color:red;">*required field</th>
        </tr>
        <tr>
            <td width="150">ชื่อ-นามสกุล :</td>
            <td width="350"><?php echo $_REQUEST['name'] ?></td>
        </tr>
        <tr>
            <td>ที่อยู่ :</td>
            <td><?php echo $_REQUEST['address'] ?></td>
        </tr>
        <tr>
            <td>อีเมล : </td>
            <td><?php echo $_REQUEST['email'] ?></td>
        </tr>
        <tr>
            <td>หมายเลขโทรศัพท์ :</td>
            <td><?php echo $_REQUEST['phone'] ?></td>
        </tr>
    </table>
    <!-- <button style="margin-top:15px;" onclick=" history.back();">BACK</button> -->
    <a style="margin-top:15px;" href="../addCustomer.php">BACK</a>
    <!-- <input style="margin-top:15px;" type="submit" value="บันทึกข้อมูล">
    <input type="reset" value="ล้างข้อมูล"> -->
    </form>
</center>
    
</body>
</html>
</body>
</html>
