<?php
function sum($a,$b,$c){
 $sum=$a+$b+$c;
 return $sum;
}
function subtraction($a,$b,$c){
    $subtraction=$a-$b-$c;
    return $subtraction;
}
function multiplication($a,$b,$c){
    $multiplication=$a/$b/$c;
    return $multiplication;
}
echo "sum:".sum(4,3,3);
echo subtraction(34,4,4);
echo multiplication(3,3,3);


?>