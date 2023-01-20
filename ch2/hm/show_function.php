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
   
   showData($_POST['username'],$_POST['password'],$_POST['comment']);

?>

<!-- <br /> -->
<a href="form_function.php">BACK</a>
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