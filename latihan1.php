<?php
function swap(&$a,&$b){
    $c;
    $c=$a;
    $a=$b;
    $b=$c;
}
$a=1;
$b=2;
echo $a;
echo $b;

swap($a,$b);
echo $a;
echo $b;
?>