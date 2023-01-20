<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>การสร้างฟอร์ม</title>
</head>

<body>
    <h2>แบบปกติ</h2>
<?php
    echo "
    Username  : ".$_REQUEST['username'] ."<br />
    Password  :  ".$_REQUEST['password']."<br />
    ความคิดเห็น :  ".$_REQUEST['comment']."<br />
    ";

?>

<!-- <br /> -->
<a href="form_normal.php">BACK</a>
</body>

</html>