
<?php 

function add($n1=1, $n2=10){
	// return $num1+$num2;
    $result = $n1+$n2;
    echo "Result add : ".$result."<br>";
}
function subtract($n1=1, $n2=0){
      return $n1-$n2;
    // echo "Result add : ".$result."<br>";
}
function multiply($n1, $n2, &$result){
    $result = $n1*$n2;
}

$num1 = 15;
$num2 = 2;


add($num1,$num2);
add($num1);
$resultSub = subtract($num1,$num2);
echo "Result subtract : ".$resultSub;

$resultMul = 0;
multiply($num1,$num2,$resultMul);

echo "Result multiply : ".$resultMul;

 ?> 
