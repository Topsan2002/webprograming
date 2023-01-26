

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
</head>

<body>
    <center>
        <h1>Enter Number</h1>
        <form action="mid_02.php" method="post">
            <table>
                <tr>
                    <td>
                        <input type="number" required name="num[]">

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="number" required name="num[]">

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="number" required name="num[]">

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="number" required name="num[]">

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="number" required name="num[]">

                    </td>
                </tr>

            </table>
            <input type="submit">
            <input type="reset">
        </form>
    </center>
    <hr>
    <?php

        if(isset($_REQUEST['num'])){
            $num = $_REQUEST['num'];
            getSortMax($num);
            echo "<h2> Max to Min : ".getSortMax($num)."</h2>";
            echo "<h2> Min to Max : ".getSortMin($num)."</h2>";
            echo "<h2> Max : ".getMax($num)."</h2>";
            echo "<h2> Min : ".getMin($num)."</h2>";
            echo "<h2> Sum : ".getSum($num)."</h2>";
        }
    
    
    ?>

</body>

</html>


<?php 

    function getMin($arr){
        $min = $arr[0];
        foreach ($arr as $key => $value) {
            if($min > $value) $min = $value;
        }
        return $min;
    }

    function getMax($arr){
        $max = $arr[0];
        foreach ($arr as $key => $value) {
            if($max < $value) $max = $value;
        }
        return $max;
    }

    function getSum($arr){
        $sum = 0;
        foreach ($arr as $key => $value) {
            $sum += $value;
        }
        return $sum;
    }
    
    function getSortMax($arr){
        rsort($arr); //Max
        $str = "";
        foreach ($arr as $key => $value) {
            # code...
            $key < count($arr)-1 ? $str .= $value.", " : $str .= $value;
        }
        return $str;
    }

    function getSortMin($arr){
        sort($arr); //Min
        $str = "";
        foreach ($arr as $key => $value) {
            # code...
            $key < count($arr)-1 ? $str .= $value.", " : $str .= $value;
        }
        return $str;
    }
    
    

?>