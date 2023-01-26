<?php

function square($h,$w){
    echo 
    "
    <h3>Result Square : $h * $w = ".$h*$w."</h3>
    ";
}

function rectangle($h,$w){
    echo 
    "
    <h3>Result Rectangle : $h * $w = ".$h*$w."</h3>
    ";
}

function rhombus($h,$w){
    echo 
    "
    <h3>Result Rhombus : $h * $w = ".$h*$w."</h3>
    ";
}

function triangle($h,$w){
    echo 
    "
    <h3>Result Triangle : $h * $w / 2 = ".number_format($h*$w/2,2)."</h3>
    ";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Cal</title>
</head>

<body>
    <center>

        <h1>Result</h1>
        <?php
        $high =  $_REQUEST['high'];
        $wide =  $_REQUEST['wide'];
        if($_REQUEST['high']=="" || $_REQUEST['wide'] == ""|| !isset($_REQUEST['type'])){
            echo "<h2> Please Input Data All ! </h2>";
        }else{
        if($_REQUEST['type'] == 'square'){
            square($high, $wide);
        }else if($_REQUEST['type'] == 'rectangle'){
            rectangle($high, $wide);
        }else if($_REQUEST['type'] == 'rhombus'){
            rhombus($high, $wide);
        }else if($_REQUEST['type'] == 'triangle'){
            triangle($high, $wide);
        }
        }
    ?>
        <a href="mid_01.php">BACK</a>
    </center>

</body>
</html>