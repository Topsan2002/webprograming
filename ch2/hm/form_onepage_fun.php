<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>การสร้างฟอร์ม</title>
</head>

<body>
    <h2>แบบ function 1 หน้า</h2>
    <?php 

    if(isset($_REQUEST['btnSubmit'])){
        showData($_POST['username'],$_POST['password'],$_POST['comment']);
        echo "
        <a href='form_onepage_fun.php'>BACK</a>
        ";


    }else{ ?>
    <form action="form_onepage_fun.php" method="post" name="form1" id="form1">
        Username : <input type="text" name="username" maxlength="10" /><br /> <br />
        Password : <input type="password" name="password" maxlength="6" /><br /> <br />
        ความคิดเห็น : <textarea cols="40" rows="5" name="comment"></textarea><br />
        <br />
        <input type="submit" value="Submit Query" name="btnSubmit">
        <input type="reset">
        <?php } ?>

</body>

</html>

<?php 
    
    function showData($username, $password,$comment){
        echo "
        Username  : ".$username ."<br />
        Password  :  ".$password."<br />
        ความคิดเห็น :  ".$comment."<br />
        ";
    }

?>