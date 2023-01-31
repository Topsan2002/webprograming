<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo</title>
</head>
<body>
    <center>
        <h2>Bingo game</h2>
        <?php 
           if(!isset($_REQUEST['check'])){
        ?>
        <table border="2">
           <?php
            $table = "";
            $board = setBoard($table);
            $check = checkNum($board);
            for ($i=0; $i < count($board) ; $i++) { 
                echo "<tr style='margin-top: 10px;'>";
                for ($j=0; $j < count($board[$i]) ; $j++) { 
                    echo "<td>".$board[$i][$j]."</td>";
                }
                echo "</tr>";
            }
           ?>
        </table>
        <form action="bingo.php" method="post">
            <input type="hidden" name="check" value="<?php echo $check ?>" id="">
            <input type="hidden" name="table" value="<?php echo $table ?>" id="">
        <button type="submit" style="margin-top: 10px;" onclick="">Start Game </button>
        </form>
        <?php }else{ ?>

<table border="2">
           <?php 
            $table = "";
            $board = getTable($_REQUEST['table']);
            // $check = checkNum($board);
            for ($i=0; $i < count($board) ; $i++) { 
                echo "<tr style='margin-top: 10px;'>";
                for ($j=0; $j < count($board[$i]) ; $j++) { 
                    echo "<td>".$board[$i][$j]."</td>";
                }
                echo "</tr>";
            }
        
           ?>
        </table>
        <a href="bingo.php">reset</a>
        <?php 
            echo "<br>".$_REQUEST['check'];
        
        ?>
        <?php } ?>
    </center>
</body>
</html>
<?php
    function setBoard(&$table){
        $board = array();
        for ($i=0; $i <5 ; $i++) { 
            $row = array();
            for ($j=0; $j < 5 ; $j++) { 
                $rand = random();
                $table .= $rand.",";
                array_push($row,$rand);
            }
            $table .="?";
            // echo $table;
            array_push($board,$row);
        }
        return $board;
    }
    function random(){
        return  rand(0,99);
    }
     function checkNum($data){
        $count = 0;
        $check = "";
        $i = 1;
        while($count < 5){
            $rand = random();
            if(loopCheck($data, $rand)){
                $check .= "ครั้งที่ ".$i++." = $rand => ยินดีด้วยคุณมีเลขนี้ (".++$count.") <br>";
                // $count++;
            }else{
                $check .= "ครั้งที่ ".$i++." = $rand => เสียใจด้วย คุณไม่มีเลขนี้<br>";
            }
        }
        // echo $check;
        return  $check;
    }

    function loopCheck($data, $num){
        for ($i=0; $i <5 ; $i++) { 
            for ($j=0; $j < 5 ; $j++) {
                if($num == $data[$i][$j]) return true;
            }
        }
        return false;
    }

    function getTable($data){
        // echo $data;
        $board = array();
        $a = explode("?",$data);
        for ($i=0; $i <5 ; $i++) { 
            $b = explode(",",$a[$i]);
            $row = array();
            for ($j=0; $j <5 ; $j++) { 
                array_push($row,$b[$j]);
            }
            array_push($board,$row);
        }
        // $b = explode(",",$a);
        // print_r($a);
        return $board;
    }
?>