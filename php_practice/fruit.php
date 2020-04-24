<?php

function totalprice($fruitprice, $tax=1.08, $haiso=350){
return($fruitprice * $tax) +
$haiso;}

$mikan = totalprice(300);
echo $mikan. "<br>";
$ringo = totalprice(450);
echo $ringo. "<br>";

?>