<?php
    require '../connect.php';
    $sql = "DELETE FROM tb_customer WHERE cus_id = '".$_REQUEST['cus_id']."'  ";
    $query = $conn->query($sql);
    // $hostname = "localhost";
    // $username = "root";
    // $password = "";
    // $dbName = "bookstore001";
    // $conn = mysqli_connect($hostname,$username,$password);
    // mysqli_select_db($conn, $dbName);
    // mysqli_query($conn,$sql) or die("Delete จากตาราง tb_customer มีข้อผิดพลาดเกิดขึ้น");
    // mysqli_close($conn);
    if($query){
        echo "<script>
            alert('ลบข้อมูลสำเร็จ');
        </script>";
    }else{
        echo "<script>
        alert('ลบข้อมูลไม่สำเร็จ');
        </script>";
    }
    header("location:../listCustomer.php");
    // mysqli_query($conn, $sql) or die("insert ลงตาราง customer มีข้อผิดพลาดเกิดขึ้น");
    // echo "<br><br><h2>ลบข้อมูลลูกค้าชื่อ".$fet->cus_name."สำเร็จ!!!</h2>"

    ?>
   
