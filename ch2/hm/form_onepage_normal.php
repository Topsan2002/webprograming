<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>การสร้างฟอร์ม</title>
</head>

<body>
    <h2>แบบปกติ 1 หน้า</h2>
    <?php 

    if(isset($_REQUEST['btnSubmit'])){

        echo "
        Username  : ".$_REQUEST['username'] ."<br />
        Password  :  ".$_REQUEST['password']."<br />
        ความคิดเห็น :  ".$_REQUEST['comment']."<br />
        <a href='form_onepage_normal.php'>BACK</a>

        ";


    }else{ ?>
    <form action="form_onepage_normal.php" method="post" name="form1" id="form1">
        Username : <input type="text" name="username" maxlength="10" /><br /> <br />
        Password : <input type="password" name="password" maxlength="6" /><br /> <br />
        ความคิดเห็น : <textarea cols="40" rows="5" name="comment"></textarea><br />
        <br />
        <input type="submit" value="Submit Query" name="btnSubmit">
        <input type="reset">
        <?php } ?>

</body>

</html>