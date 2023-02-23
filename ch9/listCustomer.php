<?php
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ราบชื่อลูกค้า</title>
</head>
<body>
<center>
    <h2>รายชื่อลูกค้า</h2>
    <table >
        <tr>
            <td width="200px"><a href="./addCustomer.php" style="margin-left:50px">เพิ่มลูกค้า</a></td>
            <td width="200px"></td>
            <td width="200px"></td>
            <td width="200px"></td>
            <td width="200px"></td>
        </tr>
    </table>
    <table style="margin-top:20px;" border="1">
        <tr>
            <th width="50px">ลำดับ</th>
            <th width="50px">ID</th>
            <th width="200px">ชื่อ-นามสกุล</th>
            <th width="200px">ที่อยู่</th>
            <th width="200px">อีเมล</th>
            <th width="200px">หมายเลขโทรศัพท์</th>
            <th width="80px">แก้ไข</th>
            <th width="80px">ลบ</th>
        </tr>
        
    <?php
        $i=1;
        $sql = "SELECT * FROM tb_customer ORDER BY cus_id ASC ";
        $query = $conn->query($sql);
        $result = mysqli_query($conn,$sql);
        // while($fet = mysqli_fetch_object($result)){
        while($fet = $query->fetch_object()){ 
            
            ?>
            <tr>
                <td align="center"><?php echo $i++ ?></td>
                <td align="center"><?php echo $fet->cus_id ?></td>

                <td>
                    <a href="./detailCustomer.php?cus_id=<?php echo $fet->cus_id ?>">
                <?php echo $fet->cus_name ?>

                </a>    
            
                </td>
                <td><?php echo $fet->cus_address ?></td>
                <td><?php echo $fet->cus_email ?></td>
                <td><?php echo $fet->cus_phone ?></td>
                <td align="center"><a href="./editCustomer.php?cus_id=<?php echo $fet->cus_id; ?>">แก้ไข</a></td>
                <td align="center"><a onclick="return confirm('ยืนยันการลบข้อมูลลูกค้าชื่อ : <?php echo $fet->cus_name ?>')" href="api/apiDeleteCustomer.php?cus_id=<?php echo $fet->cus_id ?> ">ลบ</a></td>
            </tr>
     <?php 
       }
       $conn->close();
    ?>
    </table>
</center>    
</body>
</html>